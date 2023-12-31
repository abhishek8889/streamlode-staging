@extends('host_layout.master')
@section('content')
<div id="remote-media"></div>
  <div id="controls">
    <div id="preview">
      <p class="instructions">Hello Beautiful</p>
      <div id="local-media">
        cancel button
      </div>
      <button id="button-preview">Preview My Camera</button>
    </div>

    <div id="room-controls">
      <p class="instructions">Room Name:</p>
      <input id="room-name" type="text" placeholder="Enter a room name" />
      <button id="button-join">Join Room</button>
      <button id="button-leave">Leave Room</button>
    </div>

    <div id="log"></div>
  </div>

<script>
var activeRoom;
var previewTracks;
var identity;
var roomName;

function attachTracks(tracks, container) {
  tracks.forEach(function(track) {
    container.appendChild(track.attach());
  });
}

function attachParticipantTracks(participant, container) {
  var tracks = Array.from(participant.tracks.values());
  attachTracks(tracks, container);
}

function detachTracks(tracks) {
  tracks.forEach(function(track) {
    track.detach().forEach(function(detachedElement) {
      detachedElement.remove();
    });
  });
}

function detachParticipantTracks(participant) {
  var tracks = Array.from(participant.tracks.values());
  detachTracks(tracks);
}

// Check for WebRTC
if (!navigator.webkitGetUserMedia && !navigator.mozGetUserMedia) {
  alert('WebRTC is not available in your browser.');
}

// When we are about to transition away from this page, disconnect
// from the room, if joined.
window.addEventListener('beforeunload', leaveRoomIfJoined);


// $.getJSON('/token.php', function(data) {

// join room code

  token = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiIsImN0eSI6InR3aWxpby1mcGE7dj0xIn0.eyJqdGkiOiJTSzA3ZmViYzE2OTk3Y2Q4NjFhNjBiZTJiMDE5MzI3ZGFlLTE2NzkyOTg2MTUiLCJpc3MiOiJTSzA3ZmViYzE2OTk3Y2Q4NjFhNjBiZTJiMDE5MzI3ZGFlIiwic3ViIjoiQUMzMjJhNjVjMWZmMmVhZTU3N2IwZDA5YTgxMWQ2ZGQ3ZCIsImV4cCI6MTY3OTMwMjIxNSwiZ3JhbnRzIjp7ImlkZW50aXR5IjoiYWJoaXNoZWsiLCJ2aWRlbyI6e319fQ.b62kISDsDOCqgxq0vwKbNdNc1e0glM8nZub5tTAJwjI';
    identity = 'abhishegsdfk';


  document.getElementById('room-controls').style.display = 'block';

  // Bind button to join room
  document.getElementById('button-join').onclick = function () {
    roomName = document.getElementById('room-name').value;
    if (roomName) {
      log("Joining room '" + roomName + "'...");

      var connectOptions = { name: roomName, logLevel: 'debug' };
      if (previewTracks) {
        connectOptions.tracks = previewTracks;
      }

      Twilio.Video.connect(token, connectOptions).then(roomJoined, function(error) {
        log('Could not connect to Twilio: ' + error.message);
      });
    } else {
      alert('Please enter a room name.');
    }
  };

  // Bind button to leave room
  document.getElementById('button-leave').onclick = function () {
    log('Leaving room...');
    activeRoom.disconnect();
  };

//   window.location.href = "{{ url('johny-host/join-room') }}";

// join room code end

// Successfully connected!
function roomJoined(room) {
  activeRoom = room;

  log("Joined as '" + identity + "'");
  document.getElementById('button-join').style.display = 'none';
  document.getElementById('button-leave').style.display = 'inline';

  // Draw local video, if not already previewing
  var previewContainer = document.getElementById('local-media');
  if (!previewContainer.querySelector('video')) {
    attachParticipantTracks(room.localParticipant, previewContainer);
  }

  room.participants.forEach(function(participant) {
    log("Already in Room: '" + participant.identity + "'");
    var previewContainer = document.getElementById('remote-media');
    attachParticipantTracks(participant, previewContainer);
  });

  // When a participant joins, draw their video on screen
  room.on('participantConnected', function(participant) {
    log("Joining: '" + participant.identity + "'");
  });

  room.on('trackAdded', function(track, participant) {
    log(participant.identity + " added track: " + track.kind);
    var previewContainer = document.getElementById('remote-media');
    attachTracks([track], previewContainer);
  });

  room.on('trackRemoved', function(track, participant) {
    log(participant.identity + " removed track: " + track.kind);
    detachTracks([track]);
  });

  // When a participant disconnects, note in log
  room.on('participantDisconnected', function(participant) {
    log("Participant '" + participant.identity + "' left the room");
    detachParticipantTracks(participant);
  });

  // When we are disconnected, stop capturing local video
  // Also remove media for all remote participants
  room.on('disconnected', function() {
    log('Left');
    detachParticipantTracks(room.localParticipant);
    room.participants.forEach(detachParticipantTracks);
    activeRoom = null;
    document.getElementById('button-join').style.display = 'inline';
    document.getElementById('button-leave').style.display = 'none';
  });
}

//  Local video preview
document.getElementById('button-preview').onclick = function() {
  var localTracksPromise = previewTracks
  ? Promise.resolve(previewTracks)
  : Twilio.Video.createLocalTracks();

  localTracksPromise.then(function(tracks) {
    previewTracks = tracks;
    var previewContainer = document.getElementById('local-media');
    if (!previewContainer.querySelector('video')) {
      attachTracks(tracks, previewContainer);
    }
  }, function(error) {
    console.error('Unable to access local media', error);
    log('Unable to access Camera and Microphone');
  });
};

// Activity log
function log(message) {
  var logDiv = document.getElementById('log');
  logDiv.innerHTML += '<p>&gt;&nbsp;' + message + '</p>';
  logDiv.scrollTop = logDiv.scrollHeight;
}

function leaveRoomIfJoined() {
  if (activeRoom) {
    activeRoom.disconnect();
  }
}

</script>
@endsection