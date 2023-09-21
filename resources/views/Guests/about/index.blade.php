@extends('guest_layout.master')
@section('content')

<!-- #################### About page ################################# -->
<style>
    .About_module ol li {
        font-size: 22px;
        padding-left: 10px;
        margin-bottom: 10px;
        font-weight: 500;
    }
</style>
<section class="top_banner inner_banner">
  <div class="container-fluid">
    <div class="inner-section">
      <div class="row banner-content">
        <div class="col-md-6 text_col">
          <div class="banner-heading">
            <h1><span class="yellow">Stream</span><span class="blue">Lode</span> can allow you to generate a revenue stream.</h1><span class="heading-pattern"><img src="{{ asset('streamlode-front-assets/images/star.png') }}"></span>
          </div>
          <div class="banner-text">
            <p>A revenue stream around your schedule, and your responsibilities, while working from home.</p><span class="text-pattern"><img src="{{ asset('streamlode-front-assets/images/text-star.png') }}"></span>
          </div>
        </div>
        <div class="col-md-6 media_col">
          <div class="banner-media">
            <img src="{{ asset('streamlode-front-assets/images/about-support-banner.png') }}" class="radius_top_50">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="choose-plan-section">
  <div class="dark_navigation up">
    <div class="container-fluid">
      <div class="dark-nav">
        <ul class="nav-list" id="filter-list">
          <!-- <li class="nav-list-item active" id="all" data-target="legal_content"><a href="#all">Legal</a></li> -->
          <!-- <li class="nav-list-item" id="standar-tier" data-target="community_guidelines"><a href="#community-guidelines" >Community guidelines</a></li> -->
       
          <li class="nav-list-item" id="group-tier" data-target="suggestions_content"><a href="#suggestions-content" >Setup</a></li>
          <li class="nav-list-item" id="premium-tier" data-target="help_content"><a href="#help-content">Help</a></li>
          <!-- <li class="nav-list-item" id="group-tier" data-target="privacy_content"><a href="#privacy-content">Privacy Policy</a></li> -->
        </ul>
      </div>
    </div>

  </div>
  <div class="plans-section">
    <div class="container">

      <!-- <div class="about-content   show_box" id="legal_content">
        <div class="section-head text-center">
          <h2><span class="yellow">Stream</span><span class="blue">Lode</span> Legal</h2>
        </div>
        
        <div class="container text_col">
            <div class="About_module">
                <h3>Introduction</h3>
                <p>Welcome to the Veritas Horizon, L.L.C. d/b/a Veritas Horizon and Streamlode (“Company,” “we,”
                    “us,” and/or “our”) Website (as defined herein). Please read the following information carefully
                    before accessing and/or using this Website or any of the Company products or services. These are
                    the terms, covenants, conditions, and provisions (the “Terms and Conditions”) governing your
                    access to and use of: any of the current or future websites, webpages, platforms, and applications
                    (whether online, digital, or mobile), including the Company services offered or provided therein,
                    that are created, developed, and/or operated by Company or any of its owners, affiliates,
                    subsidiaries, parent, assigns, successors, licensors, licensees, representatives, or agents
                    (collectively, hereinafter referred to as the “Website”). If you do not accept these Terms and
                    Conditions or you do not meet or comply with the provisions, you may not use the Website,
                    including any Company services, offer your services on the Website, or sign up for any services
                    offered by third-party service providers (the “Vendors”) on the Website. If you choose to continue
                    to use or access this Website, including any Company services, you recognize that the Company
                    has provided valuable consideration by offering this Website for use, and in exchange for that
                    valuable consideration, you agree to these Terms and Conditions. Note, however, these Terms and
                    Conditions do not apply to your access or use of, or any data or information that may be collected
                    by any third parties, including any third-party advertiser, server hosts, or vendors, so please
                    refer
                    to their respective terms and conditions, privacy policies, terms of use, and data practices for
                    more
                    information.</p>
            </div>
            <div class="About_module">
                <h3>Acceptance and Conduct</h3>
                <p>
                    By accessing or using the Website, you accept these Terms and Conditions, any other Company
                    policy, and any applicable third-party terms and conditions, privacy policies, terms of use, and/or
                    data practices, and agree to be legally bound by them, and all applicable laws, rules, and
                    regulations
                    associated with your access or use of the Website. If you do not agree to be bound by these Terms
                    and Conditions, the Privacy Policy, or any other published policy of the Company or applicable
                    third parties, you are not authorized to access or use the Website or solicit or use any of
                    Company’s
                    products/services. We reserve the right, in our sole discretion, to modify or update these Terms
                    and Conditions at any time. Please check the Terms and Conditions each time you visit the Website
                    for the most current version and information. Third parties may also modify or update their
                    respective terms and conditions, privacy policies, terms of use, and/or data practices from time to
                    time, so please periodically refer to their policies as well for the most current version.
                    These Terms and Conditions apply to the Website, the content contained therein, and all Company
                    services whether you access such content directly on or through this Website, you download such
                    content from this Website, or you use any other product or service offered by Company. You are
                    authorized by Company to access and use the information on the Website, solely for personal,
                    noncommercial use or approved business purposes, provided that you are at least 18 years of age or
                    you’re represented by a parent or legal guardian having the full legal capacity over you, with the
                    understanding that all terms set forth in these Terms and Conditions or any other policy of the
                </p>
                <p>
                    Company shall be binding upon you and your parent or legal guardian. The information, materials,
                    products, services, classes, events and appointments displayed on the Website may not otherwise
                    be copied, transmitted, displayed, distributed, downloaded, licensed, modified, published, posted,
                    reproduced, used, sold, transmitted, used to create a derivative work, or otherwise used for
                    commercial or public purposes without Company’s express prior written consent, which may be
                    withheld or conditioned in Company’s sole and absolute discretion. Any use of data mining, robots
                    or similar data gathering or extraction tools or processes in connection with the Website, and any
                    reproduction or circumvention of the navigational structure or presentation of the Website or its
                    content is strictly prohibited. You agree not to use the Website for any unlawful purpose.
                    In order to access certain features of the Website, Vendors may be required to create an account
                    with the Company and provide certain Personal Information (as defined in the Privacy Policy of
                    the Company). You are responsible for maintaining the confidentiality of the username(s) and
                    password(s) provided to you and/or any account information and are fully responsible for all
                    activities that occur under such username, password, or account, including all business conducted
                    or information submitted or obtained under such username, password, and/or account. You agree
                    to immediately notify the Company in writing of any unauthorized use of the password or account
                    or any other breach of security. You must log out from your account at the end of each session.
                    The Company reserves the right to block your account or your use of any username or password
                    if it suspects that you have violated these Terms and Conditions or any other policy of the
                    Company. </p>
                <p>
                    If you supply a telephone number in connection with use of the Website, you consent to receive
                    calls or texts at that number, whether manually or automatically dialed or sent, from Company
                    and/or from participating vendors. If you supply an email address in connection with the use of
                    the Website, you consent to receive electronic communication from Company, participating
                    vendors or other third-party vendors. You may opt out of these communications by writing to the
                    Company at <a href="mailto:Support@streamLode.com">Support@streamLode.com</a>.</p>
                <p>
                    You agree not to modify the Website, or use modified versions of the Website, including to the
                    Company services (except if modified by Company) including for the purpose of obtaining
                    unauthorized access to the Website. You agree not to access the Website by any means other than
                    through the interface that is provided by the Company for use in accessing the Website. </p>
            </div>
            <div class="About_module">
                <h3>Privacy</h3>
                <p>Please review the Company’s Privacy Policy, which can be found <a href="{{ url('privacy-policy') ?? ''}}">here</a>, to understand our practices.
                    Information regarding Company’s processing of Personal Information is set forth in its Privacy
                    Policy and is incorporated into these Terms and Conditions By using our website and/or any
                    Company products and services, you agree that we may use and share your Personal Information,
                    as defined and set forth in the Privacy Policy.
                    Specifically, you acknowledge that the Company may collect certain Personal information, share
                    certain Personal Information with third parties, and may contact you periodically, all in accordance
                    with the terms of the Privacy Policy. The Company also reserves the right to comply, in its sole
                    discretion, with legal requirements, requests from law enforcement agencies or requests from
                </p>
                <p>
                    government entities, even to the extent that such compliance may require disclosure of certain
                    Personal Information. </p>
            </div>
            <div class="About_module">
                <h3>Ownership of Materials; Intellectual Property Rights</h3>
                <p>The Website, including the content contained therein and Company products and services,
                    Company names, product/services names, scripts, images, graphics, text, articles, graphics, blogs,
                    information about Company products or services, photos, sounds, videos, website design,
                    interactive features and the like (“Content”) and the copyrights, trademarks, service marks, and
                    logos contained therein (“Marks”) are the sole property of the Company or its licensors, and are
                    protected by United States and international copyright, trademark and other laws (Content and
                    Marks are collectively referred to as “Company IP”). Except for the limited licenses expressly
                    granted to you in these Terms and Conditions, if any, the Company retains all proprietary rights to
                    Company IP. Without limiting the foregoing, you may not reproduce, copy, modify, display, sell,
                    or distribute Company IP, or use it in any other way for public or commercial purposes. This
                    includes any code that Company creates to generate or display the Content or the pages making up
                    the Website. The use of Company IP on any other website or in a networked computer environment
                    for any purpose is strictly prohibited. </p>
                <p>
                    You must retain all copyright, trademark, service mark and other proprietary notices contained on
                    Company IP or other Company materials on any authorized copy you make of Company IP. All
                    other trademarks, service marks, and/or confidential and proprietary information contained on the
                    Website are the property of their respective owners. Company IP and other information contained
                    on the Website is provided to you AS IS for your information and personal or approved business
                    use only. Company reserves all rights not expressly granted in and to the Website and Company
                    IP. You agree to not engage in the use, copying, or distribution of any of Company IP or any
                    Company products/services other than expressly permitted herein. If you download or print a copy
                    of Company IP for your use, you must retain all copyright and other proprietary notices contained
                    therein. You agree not to circumvent, disable or otherwise interfere with security-related features
                    of the Website or features that prevent or restrict use or copying of any Company IP or enforce
                    limitations on use of the Website or the content therein. If you believe any trademarks, service
                    marks, or logos used on the Website to be the property of someone else, please notify the Company
                    in writing at <a href="mailto:Support@streamLode.com">Support@streamLode.com</a>.</p>
            </div>
            <div class="About_module">
                <h3>Licenses</h3>
                <p>
                    The Company hereby grants you a limited, terminable, non-assignable, non-exclusive, revocable
                    right to access and use Company IP as contemplated herein. All such uses are for your personal or
                    approved business use only and shall not be used for any commercial purpose without the
                    Company’s and/or Vendor’s prior consent, as applicable. You expressly agree and acknowledge
                    that no Company IP or User Content (as defined herein) may be copied, transmitted, displayed,
                    distributed, downloaded, licensed, modified, published, posted, reproduced, used, sold,
                    transmitted, used to create a derivative work, or otherwise used for commercial or public purposes
                    without Company’s or Vendor’s, express prior written consent, as applicable, which may be
                    withheld or conditioned in Company’s, or Vendor’s, as applicable, sole and absolute discretion.
                    The Company reserves the right to suspend or terminate your access and use of the Website,
                </p>
                <p>
                    including any Company services at any time if the Company, in its sole discretion, determines that
                    you are in breach of these Terms and Conditions.
                    You agree to give Company a non-exclusive, royalty-free, worldwide license (and right to
                    sublicense), of
                    any rights, including intellectual property rights, in any Personal Information (as
                    defined in Company’s Privacy Policy) that you provide to Company subject to the limitations set
                    forth herein, within the Privacy Policy, and other published policy of Company. Any information,
                    including Personal Information, provided to Company, including through the Website, or to a
                    third-party through the Website, will be collected and used by Company in its sole and absolute
                    discretion to provide services to you, to help improve the content and functionality of the Website,
                    to better tailor the Website to your needs, to respond to any inquiry or requests submitted by you,
                    and to suggest products or services that may be relevant to you during your use of the Website,
                    including any Company or third-party products/services. Company may also use such information
                    to customize the Website, including any Company products/services to provide a better user
                    experience and to enhance or maintain the Website, content, including any Company
                    products/services.
                </p>
            </div>
            <div class="About_module">
                <h3> User Content</h3>
                <p>
                    The Website may contain features that allow Vendors and certain other users to submit certain
                    content and information that are publicly available to other users (“Common Spaces”). Any
                    content that you submit, contribute, post, upload, or send on or through the Common Spaces of the
                    Website (“User Content”) shall be deemed not to be confidential and may be used by Company in
                    any manner consistent with these Terms and Conditions and Company’s Privacy Policy. Note that
                    User Content only includes content that is submitted by you on or for the Common Spaces. It does
                    not include any content that is shared with the Company through other means. Company reserves
                    the right to use any User Content as it deems appropriate including, without limitation, by
                    changing, deidentifying, redacting, modifying, editing, rejecting, or refusing to use, upload,
                    publish or post it.</p>
                <p>
                    You acknowledge and agree that you are solely responsible for all User Content you make
                    available through the Website. By submitting, providing, contributing, posting, uploading, or
                    sending User Content on or through the Website, you represent and warrant that: (i) the User
                    Content is original to you; (ii) no other party has any exclusive rights thereto; (iii) you either
                    own
                    the User Content or have the rights necessary to grant Company and other users rights in the User
                    Content, as provided for below; (iv) the submitting, contributing, providing, posting, uploading,
                    or sending of the User Content through the Website, or Company’s exercise of the rights granted
                    to it in the User Content, will not violate the rights of any third parties (for example, patents,
                    copyrights, trademarks, trade secrets, or other intellectual property rights, or rights of publicity
                    or
                    privacy) or any applicable statutes, laws, rules, regulations, guidelines, or ordinances; and (v) no
                    payments of any kind shall be due to any third party. The Company is not responsible for
                    maintaining any User Content that you provide on the Website, and the Company may delete or
                    destroy any such User Content at any time and for any reason and without notice to you.
                    In addition, the Company may monitor the exchange of information, data, video, and
                    communications between Vendors and its customers that takes place on or through the Website.
                    Customers of Vendor’s services hereby acknowledge that the information, views, and opinions
                    posted on Vendor’s profile are those of the respective Vendors and do not reflect the views or the
                    position of the Company</p>
            </div>
            <div class="About_module">
                <h3> Third Party Materials</h3>
                <p>
                    Through the Website you may come across, access, review, display, use, or purchase third-party
                    products, services, resources, software, technology, materials, information, Content, or your or
                    other Website user’s User Content (“Third-Party Materials”). You acknowledge and agree that
                    you are solely responsible for and assume all risks arising from your access to, use of, or reliance
                    on any Third-Party Materials, and Company disclaims any liability that you may incur arising from
                    your access to, use of, or reliance on Third-Party Materials or other users’ User Content. You also
                    acknowledge and agree that Company: (i) has no responsibility for the availability or accuracy of
                    Third-Party Materials, including third-party products or services, or other users’ User Content;
                    (ii)
                    has no liability to you or any third party for any harm, injuries, or losses suffered as a result of
                    your purchase of, access to, use of, or reliance on such Third-Party Materials or other users’ User
                    Content; and (iii) does not make any promises to remove Third-Party Materials or other users’
                    User Content from the Website or from being accessed through the Website. Nothing in these
                    Terms of Use authorizes you to, and you may not, reproduce, transmit, distribute, publicly display,
                    publicly perform, communicate to the public, make available, create derivative works of, or
                    otherwise use or exploit any Third-Party Materials or other users’ User Content except as expressly
                    permitted by the Website, these Terms and Conditions or any other published policy of Company.
                </p>
                <p>
                    Company neither endorses nor guarantees in any way the Vendors, suppliers, organizations,
                    sponsors, authors, advertisers, partners, data, information, materials, views, recommendations,
                    plans, or products or services offered, published, posted, uploaded, expressed, and/or promoted on
                    the Website.</p>
                <p>
                    The Website may include hypertext links or links to other websites or webpages, or to information
                    and/or articles created and maintained by other organizations or users/individuals. These links are
                    provided solely for Company users’ information and convenience. When users select a link to an
                    external platform, website or webpage, they leave the Company Website and are subject to the
                    privacy, security policies, and terms and conditions of the owners/sponsors of the external link.
                    The Company is not responsible for any Personal Information provided or collected by third parties
                    on other sites.
                <p>
            </div>
            <div class="About_module">
                <h3>Representations</h3>
                <p>In addition to all other representations contained herein, you expressly represent, warrant, and
                    agree that you will not use (or plan, encourage, or help others to use) the Website, including any
                    Company products/services for any purpose in any manner that is prohibited by these Terms and
                    Conditions, the Privacy Policy, any other published policy of Company, or by applicable law. In
                    addition to all other representations contained herein, you further represent that you own and
                    control the ownership rights to, or you otherwise have the lawful right or permission to use, the
                    User Content that you provide to the Company or otherwise distribute on or through this Website.</p>
            </div>
            <div class="About_module">
                <h3>Website Content</h3>
                <p>The Company created the Website to provide general information about the products and services
                    offered through the Website. The Website is for informational purposes only.</p>
                <p>
                    Company makes no representation that any or all of the Content, User’s Content, Third-Party
                    Materials, information, materials, events, classes, lessons, experiences, data, or other products or
                    services on the Website are accurate, appropriate, or available for sale or use. The information
                    provided on the Website is provided as a convenience to you. The Content or User Content
                    contained on this Website does not obligate Company to provide any specific material, product,
                    service, or class to you. The Company will use reasonable efforts to include accurate and up-todate
                    information. However, the Company does not warrant and cannot guarantee the accuracy,
                    availability, completeness or authenticity of the information contained on the Website, or its
                    suitability for any purpose.</p>
                <p>
                    The Website may include technical inaccuracies or typographical errors. Company and/or its
                    Vendor’s will from time to time revise the information, products, and services described on the
                    Website and reserves the right to make such changes to the Terms and Conditions, the Privacy
                    Policy, and/or any other published policy of Company from time to time without notice to you.
                    Any changes to the Terms and Conditions will be effective immediately upon the posting of the
                    revised Terms and Conditions on the Website. Your continued use of the Website, including any
                    Company products/services after any such posting of the revised Terms and Conditions shall
                    constitute your acceptance of any changes, additions, or deletions to the Terms and Conditions.</p>
            </div>
            <div class="About_module">
                <h3> General Terms of Service</h3>
                <p>
                    In order for Vendors to upload and/or publish a profile and/or other information on the Website
                    (the “Subscription”), Vendors must timely and fully pay a subscription fee (the “Subscription
                    Fee”) to the Company, as determined by the Company in its sole and absolute discretion. The
                    Subscription Fee shall be paid on a monthly basis on or before the first day of each month. In the
                    event the Subscription Fee is not timely and fully paid, Company reserves the right to charge a late
                    fee, in its sole and absolute discretion, and/or delete such non-compliant Vendor’s profile and
                    other
                    information from the Website, without any notice to the Vendor. In addition, the Company may
                    conduct background checks of Vendors and, based on the results of such background checks, the
                    Company reserves the right to terminate the Subscription and delete a Vendor’s profile and other
                    information from the Website at any time, in its sole and absolute discretion. Any violation of
                    these Terms and Conditions and/or any other policy of the Company shall result in the termination
                    of the Subscription and removal of a Vendor’s profile and information from the Website at any
                    time, in the Company’s sole and absolute discretion and without notice of any kind to such Vendor.
                    Vendors hereby acknowledge and agree that the services requested from the Company have been
                    specially curated for the Vendor’s specific needs and, therefore, the Subscription Fee may not be
                    returned, refunded, and/or credited. The Subscription shall automatically renew on a monthly basis
                    unless otherwise terminated by either the Vendor or Company by providing the other with ten (10)
                    days’ prior written notice.
                </p>
                <p>
                    Vendors further acknowledge and agree that the Company may terminate the Subscription and
                    delete and remove Vendor profiles and information at any time in its sole and absolute discretion
                    and without notice of any kind to such Vendor. In the event of the termination of the Subscription,
                    removal of a Vendor’s profile or information from the Website, and/or scheduled or unscheduled
                    downtime, maintenance, system updates, malfunction, or other unavailability of any portion or all
                    of the Website, Company or Vendor product, or service for any reason, including as a result of
                    power outages, system failures, or other interruptions, then the Company shall not be obligated to
                    refund or credit the Subscription Fee or Service Fee (as defined below).</p>
                <p>
                    Customers of the Vendors’ services shall pay a service fee (the “Service Fee”) for such Vendors’
                    services as determined by the Vendor. The Service Fee must be paid through the Website. The
                    Company is not obligated or responsible for any returns, refunds, or credits of the Service Fee. If
                    a customer of a Vendor’s services is dissatisfied with the Vendor’s services, the customer must
                    reach out to and/or file a complaint directly with the Vendor, and not the Company. Vendors shall
                    receive the Service Fee or a portion of the Service Fee to their Stripe accounts through the
                    Website.
                    Company may issue a discount on the Subscription Fee or Service Fee at any time, in its sole and
                    absolute discretion. Such discount is not guaranteed and may be revoked by the Company at any
                    time.</p>
                <p>
                    By requesting products and/or services from the Company, you are (i) offering to purchase a
                    product and/or service from Company, (ii) representing that you are at least 18 years old or
                    represented by a parent or legal guardian having the full legal capacity over you, with the
                    understanding that all terms set forth in these Terms and Conditions or any other policy of the
                    Company shall be binding upon you and your parent or legal guardian, (iii) representing that all
                    information you provide to us in connection with such request for products and/or services is true
                    and accurate, (iv) representing that you (or your parent or legal guardian) are an authorized user
                    of the payment method provided, (v) representing that you accept and agree to these Terms and
                    Conditions, the Privacy Policy, and any other published policy of Company, and (vi) representing
                    that you are using all such Company and/or third-party services at your own risk. When you request
                    any product and/or service through the Website, the Company must receive payment prior to you
                    receiving the product and/or service, and you may not receive the product or service until we verify
                    certain items, including without limitation your Personal Information, your payment information,
                    and your creditworthiness.</p>
                <p>
                    We reserve the right to: (i) refuse any request for products and/or services you place with or
                    through us or refuse to provide you with any product or service on the Website; (ii) correct any
                    errors, inaccuracies, or omissions with regard to the products or services offered; (iii) change or
                    update information in connection with any products or services offered; (iv) contact you by phone
                    or email to confirm your request for products and/or services; and/or (v) modify or cancel your
                    request for products and/or services, whether or not your request already has been confirmed, each
                    at any time without notice to you (including after you have submitted your request for products
                    and/or services) and without being liable to you. We reserve the right to limit, reject, modify, or
                    cancel requests for products and/or services that, in our sole judgment, appear to be placed by
                    unauthorized parties. </p>
                <p>
                    All prices, products, and services advertised, including availability of products and services and
                    the price of the Subscription Fee and Service Fee, are subject to change. Although the Website is
                    composed with care, it may happen that the information regarding products or services, Vendors,
                    Vendors products, Vendors services, classes, offers, events, dates, pricing, or availability on the
                    Website contains errors. We are not bound by our or our Vendor’s description of such information
                    on the Website and we therefore reserve the right to modify or cancel your request for products
                    and/or services in the event of pricing, availability, or other errors on the Website. We reserve
                    the
                    right to discontinue any product, service, class, or event at any time. Any offer for any product or
                    service made on this site is void where prohibited. Any images on the Website are for illustrative
                    purposes only and are not a guarantee that any products or services obtained will have the exact
                    details or specification as shown in the illustrations. The product and/or service you receive may
                    vary from that shown on images on the Website.</p>
                <p>
                    We reserve the right, but are not obligated, to limit products or services to any person, geographic
                    region, or jurisdiction. We may exercise this right on a case-by-case basis. We reserve the right to
                    limit the quantities of any products or services and to offer services at different prices. We do
                    not
                    warrant that the quality of any products, services, information, or other material purchased or
                    obtained by you will meet your expectations, or that any errors in the products or services will be
                    corrected.</p>
                <p>
                    Company shall not be liable to you or to any other person for any delays in performance or any
                    nonperformance of Company’s obligations caused by circumstances beyond Company’s control;
                    for example, as a result of any of the following events: Vendor’s delay or failure to perform or
                    provide products and/or services; any inaccuracies in Vendor profile or Vendor’s products or
                    services; service downtime, technical problems, shortages of labor, materials, space, products, or
                    services; delays or failure in obtaining necessary permits, licenses, approvals, transportation,
                    materials, or products; defects or prolonged breakdown of telecommunication or other
                    communications; statute, regulation, order or any other action of any governmental authority;
                    pandemic, widespread infectious disease or public health or other emergency; acts of God or
                    natural disaster; war and acts of war (whether declared or not), or any other events which arise
                    from circumstances beyond the control of Company. Such circumstances shall result in the
                    Company’s relief from damages and other measures. </p>
            </div>
            <div class="About_module">
                <h3> DISCLAIMER OF WARRANTIES </h3>
                <p>THE USE OF THE WEBSITE, COMPANY PRODUCTS, COMPANY SERVICES, VENDOR
                    PRODUCTS AND/OR VENDOR SERVICES, AND YOUR ATTENDANCE AT ANY
                    APPOINTMENTS, CLASSES, OR OTHER EVENTS THROUGH THE WEBSITE
                    (“REGISTERED EVENT”) IS ENTIRELY AT YOUR OWN RISK AND ANY MATERIALS
                    DOWNLOADED, INFORMATION PROVIDED OR OBTAINED THROUGH THE WEBSITE
                    (INCLUDING CONTENT, USER CONTENT AND THIRD-PARTY MATERIALS), AND THE
                    PRODUCTS OR SERVICES PROVIDED BY OR RECEIVED FROM OR THROUGH
                    COMPANY (AND/OR ITS WEBSITE OR VENDORS) ARE AT YOUR OWN DISCRETION
                    AND RISK AND YOU WILL BE SOLELY RESPONSIBLE FOR AND WAIVE ANY AND
                    ALL CLAIMS WITH RESPECT TO ANY DAMAGE TO YOUR PERSON, BUSINESS,
                    COMPUTER SYSTEM, EQUIPMENT, INTERNET ACCESS, OR LOSS OF DATA THAT
                    RESULTS FROM THE DOWNLOAD OR USE OF SUCH MATERIALS, INFORMATION,
                    PRODUCTS, OR SERVICES. THE COMPANY MAKES NO WARRANTY OR
                    REPRESENTATION AS TO THE SECURITY OF ANY INFORMATION YOU TRANSMIT
                    TO THE COMPANY OR THROUGH THE WEBSITE, OR AS TO THE WEBSITE, COMPANY
                    PRODUCTS, COMPANY SERVICES, VENDOR PRODUCTS, VENDOR SERVICES,
                    REGISTERED EVENTS, MATERIALS, CONTENT, USER CONTENT, THIRD-PARTY
                    MATERIALS, AND INFORMATION’S COMPLIANCE TO ANY RULES, REGULATIONS,
                    OR ANY OTHER APPLICABLE LAW. THE MATERIALS, COMPANY PRODUCTS,
                    COMPANY SERVICES, VENDOR PRODUCTS, VENDOR SERVICES, USER CONTENT,
                    THIRD-PARTY MATERIALS, CONTENT, AND INFORMATION ON THE WEBSITE ARE
                    PRESENTED WITHOUT EXPRESS OR IMPLIED WARRANTIES OF ANY KIND AND ARE
                    PROVIDED ON AN ‘AS IS’ AS-AVAILABLE BASIS WITHOUT ANY WARRANTY OF
                    ANY KIND. IT IS YOUR RESPONSIBILITY TO EVALUATE THE ACCURACY,
                    COMPLETENESS, AND USEFULNESS OF THE INFORMATION, CONTENT, USER
                    CONTENT, THIRD-PARTY MATERIALS, PRODUCTS, OR SERVICES PROVIDED,
                    INCLUDING THEIR COMPLIANCE TO ALL APPLICABLE LAWS.</p>
                <p>
                    THE COMPANY, TO THE FULLEST EXTENT PERMITTED BY LAW, DISCLAIMS ALL
                    EXPRESS OR IMPLIED WARRANTIES OF ANY KIND WITH RESPECT TO (I) THE
                    WEBSITE, (II) THE INFORMATION CONTAINED THEREIN, INCLUDING THE CONTENT
                    USER CONTENT, AND THIRD-PARTY MATERIALS (III) ANY PRODUCTS OR SERVICES
                    OFFERED ON THE COMPANY’S WEBSITE OR BY ITS VENDORS OR ANY OTHER
                    THIRD-PARTY, AND (IV) YOUR ATTENDANCE AT ANY REGISTERED EVENT. SUCH
                    WARRANTIES DISCLAIMED BY COMPANY INCLUDE, BUT ARE NOT LIMITED TO,
                    THE IMPLIED WARRANTIES OF MERCHANTABILITY, TITLE, QUALITY,
                    EFFECTIVENESS, NON-INFRINGEMENT OF THIRD PARTIES' RIGHTS, AND FITNESS
                    FOR PARTICULAR PURPOSE. ADDITIONALLY, COMPANY DISCLAIMS ANY AND ALL
                    WARRANTIES FOR INFORMATION, DATA, DATA PROCESSING SERVICES, UPTIME,
                    UNINTERRUPTED ACCESS, AND ANY WARRANTIES CONCERNING THE
                    AVAILABILITY, CONNECTIVITY, DISPLAYABILITY, ACCURACY, PRECISION,
                    CORRECTNESS, THOROUGHNESS, COMPLETENESS, USEFULNESS, OR CONTENT OF
                    INFORMATION. FURTHER, COMPANY DOES NOT WARRANT THAT YOUR USE OF
                    THE WEBSITE, INCLUDING PERSONAL INFORMATION, USER CONTENT, THIRDPARTY MATERIALS, COMPANY OR VENDOR
                    PRODUCTS/SERVICES, OR OTHER
                    INFORMATION PROVIDED BY YOU, WILL BE SECURE, UNINTERRUPTED, ALWAYS
                    AVAILABLE OR ERROR-FREE, OR THAT THE WEBSITE, COMPANY OR VENDOR
                    PROFILE, PRODUCTS, SERVICES, OR REGISTERED EVENTS WILL MEET YOUR
                    REQUIREMENTS OR THAT ANY DEFECTS ON THE WEBSITE INCLUDING IN THE
                    COMPANY OR VENDOR PROFILE, PRODUCTS, OR SERVICES WILL BE CORRECTED.
                    NO PRODUCTS (INCLUDING THIRD-PARTY PRODUCTS), SERVICES (INCLUDING
                    SERVICES FROM THIRD PARTIES SUCH AS THE COMPANY’S VENDORS), OR
                    INFORMATION, WHETHER ORAL OR WRITTEN, OBTAINED BY YOU FROM THE
                    COMPANY, ITS VENDORS OR THROUGH THE WEBSITE SHALL CREATE ANY
                    WARRANTY. NO ADVICE OR INFORMATION, WHETHER ORAL OR WRITTEN,
                    OBTAINED FROM THE COMPANY, ITS VENDORS, OR THROUGH OR LINKED TO OR
                    FROM THE WEBSITE SHALL CREATE ANY WARRANTY EXPRESS OR IMPLIED.
                    COMPANY FURTHER SPECIFICALLY DISCLAIMS ALL WARRANTIES, EXPRESS OR
                    IMPLIED WITH RESPECT TO ANY PRODUCTS, SERVICES, REGISTERED EVENTS, OR
                    CONTENT, INCLUDING THIRD-PARTY MATERIALS, VENDOR’S PRODUCTS OR
                    SERVICES, CONTENT OR USER CONTENT, THAT YOU MAY PURCHASE, RECEIVE,
                    ACCESS, OR USE. THE COMPANY DOES NOT MAKE ANY REPRESENTATIONS OR
                    WARRANTIES THAT ANY PRODUCTS, SERVICES, REGISTERED EVENTS, CONTENT,
                    USER CONTENT, THIRD-PARTY MATERIALS, VENDOR’S PROFILE, PRODUCTS OR
                    SERVICES, ARE ACCURATE, FACTUAL, USEFUL, OR BENEFICIAL. SUCH PRODUCTS
                    OR SERVICES MUST BE USED FOR ITS INTENDED PURPOSES.</p>
                <p>
                    SOME JURISDICTIONS DO NOT ALLOW THE EXCLUSION OF CERTAIN IMPLIED
                    WARRANTIES, OR THE LIMITATION OR EXCLUSION OF LIABILITY FOR INCIDENTAL
                    OR CONSEQUENTIAL DAMAGES, THEREFORE, IN CERTAIN CIRCUMSTANCES THE
                    LIMITATION OF LIABILITY AND DISCLAIMERS MAY NOT APPLY TO YOU.</p>
                <p>
                    COMPANY DOES NOT WARRANT THAT THE WEBSITE, ANY COMPANY SERVICE,
                    VENDOR PROFILE, OR ANY VENDOR PRODUCTS OR SERVICE WILL OPERATE
                    ERROR-FREE OR ARE FREE OF COMPUTER VIRUSES OR OTHER HARMFUL
                    MECHANISMS. IF YOUR USE OF THE WEBSITE, THE COMPANY OR VENDOR
                    PRODUCT OR SERVICE RESULTS DIRECTLY OR INDIRECTLY IN THE NEED FOR
                    SERVICING OR REPLACING EQUIPMENT OR DATA, THE COMPANY IS NOT
                    RESPONSIBLE FOR THOSE COSTS.</p>
                <p>
                    THE COMPANY MAKES NO REPRESENTATIONS OR GUARANTEES REGARDING THE
                    CONTENT OF THE WEBSITE, INCLUDING, BUT NOT LIMITED TO, BROKEN LINKS,
                    INACCURACIES OR TYPOGRAPHICAL ERRORS. </p>
            </div>
            <div class="About_module">
                <h3> LIMITATION OF LIABILITY</h3>
                <p>YOU ASSUME ALL RESPONSIBILITY AND RISK FOR YOUR USE OF (OR
                    ATTENDANCE AT, AS APPLICABLE) THE WEBSITE, COMPANY PRODUCTS,
                    COMPANY SERVICES, VENDOR PRODUCTS, VENDOR SERVICES, REGISTERED
                    EVENTS, THE INTERNET GENERALLY, AND THE INFORMATION, MATERIALS,
                    CONTENT, USER CONTENT, THIRD-PARTY MATERIALS AND OTHER MATERIALS
                    YOU ACCESS AND FOR YOUR CONDUCT ON AND OFF THE WEBSITE. SPECIFICALLY,
                    YOU AGREE TO RELEASE COMPANY AND ITS MEMBERS, OWNERS, MANAGERS,
                    EMPLOYEES, REPRESENTATIVES, INSURERS, PARENTS, SUBSIDIARIES,
                    AFFILIATES, SUCCESSORS, ASSIGNS, AND/OR AGENTS (THE “COMPANY PARTIES”)
                    AS FOLLOWS:</p>
                <p>
                    TO THE FULLEST EXTENT PERMITTED BY APPLICABLE LAWS, IN NO EVENT SHALL
                    COMPANY PARTIES BE LIABLE FOR ANY DAMAGES OF ANY KIND, INCLUDING,
                    WITHOUT LIMITATION, ANY DIRECT, INDIRECT, SPECIAL, INCIDENTAL,
                    EXEMPLARY, OR CONSEQUENTIAL DAMAGES, LOSS OF PROFITS, PROPERTY
                    DAMAGE, BODILY HARM, INJURY, OR DEATH, GOODWILL OR DAMAGES
                    RESULTING FROM LOSS OF DATA, OR BUSINESS INTERRUPTION RESULTING FROM
                    OR ARISING UNDER OR IN CONNECTION WITH COMPANY PRODUCTS, COMPANY
                    SERVICES, VENDOR PRODUCTS, VENDOR SERVICES, REGISTERED EVENTS,
                    CONTENT, USER CONTENT OR THIRD-PARTY MATERIALS OFFERED OR PROVIDED
                    BY COMPANY OR ANY THIRD-PARTY THROUGH THE WEBSITE, OR THE USE OR
                    ACCESS TO, OR THE INABILITY TO USE OR ACCESS, THE WEBSITE, WHETHER
                    BASED ON WARRANTY, CONTRACT, TORT, OR ANY OTHER LEGAL THEORY, AND
                    WHETHER OR NOT COMPANY IS ADVISED OF THE POSSIBILITY OF SUCH
                    DAMAGES. COMPANY WILL NOT BE RESPONSIBLE FOR ANY DETRIMENTAL
                    RELIANCE THAT YOU MAY PLACE UPON THE WEBSITE OR ITS CONTENTS, OR
                    COMPANY PRODUCTS, COMPANY SERVICES, VENDOR PRODUCTS, VENDOR
                    SERVICES, CONTENT, USER CONTENT OR THIRD-PARTY MATERIALS OFFERED ON
                    THE WEBSITE OR PROVIDED BY COMPANY AND/OR ANY THIRD-PARTY THROUGH
                    THE WEBSITE. YOUR SOLE AND EXCLUSIVE REMEDY FOR DISSATISFACTION WITH
                    ANY COMPANY PRODUCT, COMPANY SERVICE, VENDOR PRODUCTS, VENDOR
                    SERVICES, THE WEBSITE, CONTENT, USER CONTENT OR THIRD-PARTY MATERIALS
                    IS TO STOP USING THE WEBSITE, COMPANY PRODUCT, COMPANY SERVICE,
                    VENDOR PRODUCTS, VENDOR SERVICES, CONTENT, USER CONTENT OR THIRDPARTY MATERIALS. IN NO EVENT SHALL
                    THE
                    COMPANY BE LIABLE FOR DAMAGES
                    GREATER THAN THE AMOUNT OF MONEY, IF ANY, THAT YOU PAID TO THE
                    COMPANY FOR A PARTICULAR PRODUCT OR SERVICE.</p>
                <p>
                    DUE TO THE NATURE OF THIS AGREEMENT, IN ADDITION TO MONEY DAMAGES,
                    YOU AGREE THAT COMPANY WILL BE ENTITLED TO EQUITABLE RELIEF UPON A
                    BREACH OF THIS AGREEMENT BY YOU.
            </div>
            <div class="About_module">
                <h3> California Residents</h3>
                <p>
                    If you are a California resident, you waive California Civil Code Section 1542, which says: "A
                    general release does not extend to claims which the creditor does not know or suspect to exist in
                    his or her favor at the time of executing the release, which if known by him or her must have
                    materially affected his or her settlement with the debtor." </p>
            </div>
            <div class="About_module">
                <h3> Confidentiality</h3>
                <p>
                    You agree to not use, disclose, divulge, reveal, recreate, reproduce, publish, or transfer to any
                    person any and all Confidential Information of Company, which term shall include any
                    information not in the public domain, in any form, possessed by, used by, under the control of,
                    emanating from, or otherwise relating to Company. The Company may disclose any information,
                    data, video, communications, profiles, and other documents or information to appropriate
                    authorities or parties if required to by law or court order. </p>
            </div>
            <div class="About_module">
                <h3> SMS Service</h3>
                <p>
                    You may now or in the future register to receive communications via short message service ("SMS
                    Service"). Participation in the SMS Service is not necessary to use the Website. By registering to
                    participate in the SMS Service, you certify that you are: (i) over the age of eighteen (18) or your
                    parent or legal guardian having the full legal capacity is hereby providing consent to you
                    registering to participate in the SMS Service, with the understanding that all terms set forth in
                    these
                    Terms and Conditions or any other policy of the Company shall be binding upon you and your
                    parent or legal guardian, (ii) authorized to enroll the designated mobile phone number in the SMS
                    Service, and (iii) authorized to incur any mobile message or data charges that may be incurred by
                    participating in the SMS Service.</p>
                <p>
                    You may subscribe to the SMS Service by entering and submitting your mobile phone number and
                    full name in the provided submission form available on our Website. By entering this information
                    and completing the submission form, you consent to the Company and other third parties
                    contacting you on your mobile phone for marketing purposes.</p>
                <p>
                    By subscribing to the SMS Service, you expressly consent and agree to accept and receive
                    communications via text message to your mobile device and to the cellular/mobile telephone
                    number(s) that you provided to Company. The information in any message may be subject to
                    certain time lags and/or delays.</p>
                <p>
                    You can text STOP to stop receiving text messages from us and HELP to receive help. You consent
                    that following such a request to unsubscribe, you may receive one final message confirming that
                    you have unsubscribed.</p>
                <p>
                    By participating in the SMS Service, you approve any such charges from your mobile carrier.
                    Check your carrier's plan for details. You acknowledge and agree that you are solely responsible
                    and liable for obtaining, maintaining, and paying all charges related to your mobile device(s).
                    The Company is not responsible for incomplete, lost, late, or misdirected messages, including (but
                    not limited to) undelivered messages resulting from any form of filtering by your mobile carrier
                    or service provider or otherwise.</p>
                <p>
                    You acknowledge and agree that the SMS Service may be provided in some cases through
                    automatic telephone dialing technology, an artificial voice or a pre-recorded voice. By providing
                    the Company with your phone number, you expressly consent to receive the SMS Service through
                    automatic dialing technology, artificial and pre-recorded voice. You agree to receive notifications
                    from Company, its representatives, employees, and agents, through any means authorized under
                    these Terms and Conditions, the Privacy Policy, and any other published policy of Company,
                    including phone calls and text messages that use automatic telephone dialing technology, artificial
                    voice or pre-recorded voice or live person.</p>
                <p>
                    The Company reserves the right, in its sole discretion, to cancel or suspend any or all of the SMS
                    Service, in whole or in part, for any reason, with or without notice to you.</p>
            </div>
            <div class="About_module">
                <h3> Entire Agreement/Reservation of Rights</h3>
                <p>
                    These Terms and Conditions, the Privacy Policy and any other policy of the Company that is
                    published or provided to you, which are incorporated herein by reference, represent the entire
                    Terms and Conditions between you and Company with respect to the use of the Website and/or
                    any Company or Vendor products or services, and supersede all prior communications and
                    proposals, whether electronic, oral, or written between you and Company with respect to the
                    Website, Company products, or Company services, or use and/or disclosure of Personal
                    Information. In the event any other terms and conditions of the Company provided to you conflicts
                    with or differs from any provision in these Terms and Conditions, these Terms and Conditions
                    shall prevail and govern for all purposes and in all respects, unless otherwise provided by the
                    Company. Any rights not expressly granted herein are reserved. Any attempt to alter, supplement
                    or amend these Terms and Conditions is null and void, unless otherwise agreed to in writing by
                    you and Company.</p>
            </div>
            <div class="About_module">
                <h3>Downtime; Service Suspensions; Termination</h3>
                <p>
                    Your access to and use of the Website, including any Company or Vendor products or services
                    may be suspended for the duration of any anticipated, unanticipated, scheduled or unscheduled
                    downtime, maintenance, system updates, malfunction, or other unavailability of any portion or all
                    of the Website, Company or Vendor product, or service for any reason, including as a result of
                    power outages, system failures, or other interruptions.</p>
                <p>
                    Company shall be entitled, without any liability to you, to suspend access to any portion or all of
                    the Website, including any Company or Vendor products or services at any time, on a system-wide
                    basis: (a) for scheduled downtime to permit Company or Vendor to conduct maintenance or make
                    modifications to the Website, including any Company products or services; (b) in the event of a
                    denial of service attack or other attack on the Website, including any Company or Vendor products
                    or services or other event that Company determines, in Company’s sole discretion, may create a
                    risk to the Website, including any Company or Vendor products or services if the Website,
                    including any Company or Vendor products or services is not suspended; or (c) in the event that
                    Company determines that the Website, including any Company products or services is prohibited
                    by law, or Company otherwise determines that it is necessary or prudent to do so for legal or
                    regulatory reasons.</p>
                <p>
                    You further agree that the Company reserves the right to terminate your access to any part of the
                    Website, including any Company or Vendor products or services for any reason in Company’s
                    sole discretion, at any time, without notice. Company also reserves the right at any time and from
                    time to time to modify or discontinue, temporarily or permanently, the Website, including any
                    Company or Vendor products or services with or without notice. You acknowledge and agree that
                    the Company shall not be liable to you or any third party for any modification, suspension, or
                    discontinuance of the Website, including any Company or Vendor products or services. </p>
            </div>
            <div class="About_module">
                <h3> Indemnification</h3>
                <p>
                    You agree to defend, indemnify, and hold harmless Company and its members, managers, owners,
                    parents, subsidiaries, affiliates, representatives, insurers, sponsors, partners, successors,
                    assigns,
                    employees and agents from and against any third party claims, liability, contributions,
                    compensation, damages, judgments, losses, actions or demands (including, without limitation,
                    costs, damages and reasonable legal and accounting fees) alleging or resulting from or in
                    connection with your use of the Website, Company IP, Content, User Content, Third-Party
                    Material or other material, your purchase or use of Company or Vendor products and/or services
                    or other material, your attendance at any Registered Event, or your breach of the Terms and
                    Conditions, the Privacy Policy, or any other published policy of Company. </p>
            </div>
            <div class="About_module">
                <h3>Governing Law; Waiver; Severability; Costs of Enforcement</h3>
                <p>
                    This Agreement is governed by the internal substantive laws of the State of Maryland, USA,
                    without respect to its conflict of laws principles. Jurisdiction for any claims arising under these
                    Terms and Conditions shall lie exclusively within the Courts of Baltimore County, Maryland,
                    USA, and you consent to the exclusive jurisdiction and venue of these Courts to enforce the terms
                    of this Agreement. You expressly waive the right to transfer any action filed therein. If any
                    provision of these Terms and Conditions is found to be invalid by any court having competent
                    jurisdiction, the invalidity of all or part of a provision shall not affect the validity of the
                    remaining
                    parts and provisions of the Terms and Conditions, which shall remain in full force and effect. All
                    provisions of these Terms and Conditions shall survive termination except those granting access
                    or use to the Website and/or any Company or Vendor products or services, and you shall cease all
                    your use and access thereof immediately. You may not assign or transfer your obligations under
                    these Terms and Conditions. No waiver of any term of these Terms and Conditions shall be deemed
                    a further or continuing waiver of such term or any other term. Except as expressly provided by
                    Company in a particular “Legal Notice,” or material on particular web pages of the Website, these
                    Terms and Conditions, Company’s Privacy Policy, and other published policy by Company
                    constitute the entire agreement between you and Company. In the event of any legal action arising
                    hereunder or between you and Company, and Company is the prevailing party, Company shall be
                    entitled to recover all costs and expenses including, but not limited to, reasonable attorneys' fees
                    incurred in enforcing, attempting to enforce, or defending any of the Terms and Conditions,
                    including costs incurred prior to commencement of legal action and in any appeal.
                </p>
            </div>
            <div class="About_module">
                <h3> Rights You Agree To Give Up</h3>
                <p>If either you or we choose to litigate any claim, then you and we agree to waive the following
                    rights: RIGHT TO PARTICIPATE AS A CLASS REPRESENTATIVE OR A CLASS
                    MEMBER IN ANY CLASS CLAIM YOU MAY HAVE AGAINST COMPANY WHETHER
                    IN COURT OR IN ARBITRATION. </p>
                <p>
                    If you have any questions about these Terms and Conditions, please write to us at:</p>
                <p>
                    P.O. Box 269, Owings Mills, Maryland 21117</p>
                <p>- or –</p>
                <a href="mailto:Support@streamLode.com">Support@streamLode.com</a>
            </div>
        </div>
        <div class="container text_col">
            <div class=" section-head text-center">
                <h2>Privacy Policy</h2>
            </div>
            <div class="About_module">
                <p>Veritas Horizon, L.L.C. d/b/a Veritas Horizon and Streamlode (“Company,” “we,” “us,” or “our”)
                    respects your privacy and is committed to protecting it through compliance with this Privacy
                    Policy (“Policy”). </p>
                <p>This Policy describes the type of information we may collect from you or that you may provide
                    when you visit our website(s) (the “Website”) and our practices for collecting, using, maintaining,
                    protecting, and disclosing that information. This Policy applies only to data gathered on this
                    Website and from direct communication between you and the Website. It does not apply to any
                    other information we collect through other channels, such as information that we collect offline,
                    from any third-party website, or from other communication methods such as phone or emails.
                    Through our Website, you may access other third-party websites that are not operated by us, and
                    this Privacy Policy does not apply to those third-party websites, so please refer to their
                    respective
                    privacy policies, data practices, and terms of use.</p>
                <p> Please read this Policy carefully to understand our policies and practices regarding your
                    information and how we will treat it. If you do not agree with our policies and practices, your
                    choice is not to use our Website. By accessing or using this Website, you expressly and
                    affirmatively agree to the terms of this Policy and consent to the collection, processing, and
                    disclosure of your information, and consent to receive communications from us, which include,
                    but are not limited to, emails and text messages as described below.
                </p>
            </div>


            <div class="About_module">
                <h3>Personal Information</h3>
                <p>Personal Information is any information that may, directly or indirectly, identify, relate to, or
                    describe you through particular reference to a unique identifier, including name, postal address,
                    email address, telephone number, location data, online identifier, or to one or more factors that
                    are
                    specific to your physical, physiological, genetic, mental, economic, cultural, or social identity.
                    Personal Information also includes inferences drawn from any of the information collected to
                    create a profile about you reflecting your preferences, characteristics, psychological trends,
                    predispositions, behavior, attitudes, intelligence, abilities, and aptitudes. </p>
                <p>In order to operate the Website in an efficient and effective manner, we may collect Personal
                    Information, including, but not limited to, name, email address, mailing address, phone number,
                    geographic location, and other information that may, directly or indirectly, reveal your personal
                    identity and which you may provide to Company during your use of the Website. The Company
                    may also conduct background checks of Vendors (as defined in the Company’s Terms and
                    Conditions) and obtain certain Personal Information through such background checks. </p>
                <p>If you make any payments on or through this Website, your payment information (e.g., credit or
                    debit card type, number, and expiration date) and related information (e.g., billing address) may
                    be collected by us and/or our third-party payment processors. </p>
                <p>If you connect to the Website using Facebook, Instagram, Google, or another social networking
                    site (each a “Social Networking Site”), we may receive information that you authorize the Social
                    Networking Site to share with us, which may include public profile information, birthday, current
                    city, work, school, and email address. This information constitutes Personal Information and is
                    therefore subject to this Policy. Any information that we collect from your Social Networking Site
                    account may depend on the privacy settings you have set with the Social Networking Site, so
                    please consult the Social Networking Site's privacy and data practices. You have the ability to
                    disconnect your Social Networking Site account from your Company account by adapting the
                    privacy settings in your Social Networking Site account. If you come to the Website through a
                    Social Networking Site, from another website, or with devices that enable third parties to collect
                    information from or about you, such third parties receive information about you subject to their
                    privacy policies. </p>
            </div>
            <div class="About_module">
                <h3>Automatic Data Collection </h3>
                <p>The Company’s operating system may automatically record some general information about your
                    visit to the Website. For example, as you navigate through and interact with our Website, we may
                    use automatic data collection technologies to collect certain information about your equipment,
                    browsing actions, and patterns including, but not limited to, computer and internet connection,
                    computer and server IP address, operating system, browser type, browser versions, details of your
                    visits to our Website such as duration and time of visit, traffic data, location data, and logs. The
                    Company may automatically track certain information based upon your behavior on the Website
                    and uses this information to do internal research on the Company’s users’ demographics, interests,
                    and behavior. If you permit the Website to access location services on your mobile device, the
                    Company may also collect the precise location of your device when the Website is running in the
                    foreground or background. </p>
                <p>The Company may use cookies, flash cookies, web beacons, log file information or other similar
                    technology in connection with automatic data collection for the purpose of storing your
                    information so that you will not have to re-enter it during your visit or the next time you visit
                    the
                    Website; providing custom, personalized content and information; and monitoring aggregate
                    metrics such as total number of visitors and pages viewed. You can voluntarily opt-out of cookie
                    collection by the Company by altering the settings of your web browser. Most Internet browsers
                    enable you to erase cookies from your computer hard drive, block all cookies, or receive a warning
                    before a cookie is stored. Please be aware, however, that some of the Company features, or services
                    may not function properly without cookies. </p>
            </div>
            <div class="About_module">
                <h3>Use of Personal Information</h3>
                <p>The Company collects and processes Personal Information to present our Website and its contents
                    to you to: provide you with information about the products, services, appointments, lessons,
                    classes, tutorials, and/or events that you request or purchase through the Website; communicate
                    with you regarding our services, our marketing, Vendor’s products and services, and other topics;
                    research, develop, and improve our services, carry out our obligations and enforce our rights
                    arising from any transactions between you and the Company, including for billing and collection;
                    notify you about changes to our Website or any products or services available to purchase through
                    it;
                    carry out our business purpose; comply with all applicable laws, such as tax laws and
                    regulations; and fulfill any other purpose for which you provide Personal Information. </p>
                <p>By using the Website, you agree that the Company may use your Personal Information to contact
                    you and deliver information to you that, in some cases, is targeted to your interests (such as
                    certain
                    of our or third parties’ goods and services) or provide administrative notices or communications
                    applicable to your use of the Website. In the event that you provided your email address to us, we
                    may send you promotional emails about the products or services offered through the Website or
                    any news about us. By accessing the Website, you expressly agree to receive this information via
                    email, text, or by any other mode of communication provided by you. If you do not wish to receive
                    these communications, we encourage you to opt out of any further receipt by following the opt out
                    provisions provided in each such communication. </p>
                <p>Personal Information may be collected and used by the Company to customize the Website to
                    provide a better user experience and to enhance or maintain Website security. We may use the
                    information we have collected from you to enable us to display advertisements to our advertisers’
                    target audiences. The Company may also aggregate certain non-personally identifiable information
                    about its users and use such anonymous information to prepare reports that it provides to its users.
                    The Company may also disclose your Personal Information to certain third-party vendors,
                    including payment processors, banks, and website support service providers, for the purposes of
                    processing your payments to the Company. Personal Information may also be disclosed to third
                    parties in order to evaluate a possible business transaction such as a merger or sale of the
                    company;
                    provided, however, that the recipient of Personal Information will be required to maintain such
                    Personal Information in confidence. The Company may disclose your Personal Information to our
                    subsidiaries and affiliates as deemed necessary in the general course of business. The Company
                    may also disclose specific Personal Information when we determine that such disclosure is
                    necessary to comply with the law, to cooperate with or seek assistance from law enforcement, or
                    to protect the interests or safety of the Company or other users of the Website. The Company may
                    use your Personal Information to enforce or apply our Terms and Conditions or other Company
                    policy or terms of use. By using the Website, you hereby authorize such use of your Personal
                    Information as described in this section. </p>
                <p>The Company will not sell your Personal Information to a third party. You may expressly direct
                    the Company to keep your Personal Information private and to not sell any of your Personal
                    Information by writing to the Company at <a href="mailto:Support@streamLode.com">Support@streamLode.com</a>.</p>
                <h3>Personal Information Storage; Retention Period</h3>
                <p>The Company may collect and store any Personal Information that you provide to the Company
                    on a third-party server. The Company reserves the right to retain your Personal Information and
                    non-personally identifiable information indefinitely except where prohibited by federal, state, or
                    local law. </p>
            </div>
            <div class="About_module">
                <h3>Credit Card Security</h3>
                <p>If you enter credit card information on the Website in connection with a purchase of products or
                    services through the Website or from the Company, or any similar transaction, that information is
                    sent directly from your browser to the third-party service provider we use to manage credit card
                    processing (Stripe, Inc.) and we do not store it on the Company’s servers. When entering your
                    credit card information, you may be redirected to stripe.com. You should refer to Stripe, Inc.’s
                    privacy policies, data practices, and terms of use for additional information. By providing your
                    credit card information through a third-party service provider such as Stripe, Inc., you expressly
                    agree to all such applicable terms and conditions from such third-party service provider, if any.
                </p>
            </div>
            <div class="About_module">
                <h3>Data Security </h3>
                <p>The Company employs commercially reasonable efforts to ensure the security and privacy of the
                    data and information the Company collects online and maintains on its database(s) hosted on
                    thirdparty servers. Unfortunately, however, no security system can be guaranteed to be 100%
                    effective
                    as the Internet is not a completely secure medium. Therefore, although the Company is committed
                    to protecting your privacy, the Company cannot and does not guarantee, and you should not expect,
                    that your Personal Information, private communications, or other user content will always remain
                    private. To protect your privacy, please do not use the Website to communicate information that
                    you want kept confidential. The Company will not be responsible for any damages you or others
                    may suffer as a result of the loss of confidentiality of any such information. </p>
                <p>The safety and security of your information also depends on you. Where we have given you (or
                    where you have chosen) a username and password for access to certain parts of our Website, you
                    are responsible for keeping this username and password confidential. We ask you not to share your
                    username or password with anyone. </p>
                <p>As a user of the Website, you understand and agree that you assume all responsibility and risk for
                    your use of the Website, third-party materials, the Internet generally, and the documents and/or
                    material you access, and for your conduct on the Website. Further, you are responsible for
                    restricting access to your computer or mobile device through which you access the Website. </p>
            </div>
            <div class="About_module">
                <h3>Accessing Your Personal Information</h3>
                <p>Every user of the Website is entitled to the following: (i) the right to request copies of your
                    Personal
                    Information, (ii) the right to request that the Company correct any Personal Information that you
                    believe is inaccurate or incomplete; (iii) the right to request that the Company erase your Personal
                    Information; (iv) the right to request the Company restrict its processing of your Personal
                    Information; (v) the right to request that the Company transfer your Personal Information to
                    another organization or directly to you. You acknowledge that any requests made pursuant to this
                    section must be in writing and provided to the Company at P.O. Box 269,
                    Owings Mills, Maryland 21117 or <a href="mailto:Support@streamLode.com">Support@streamLode.com</a>.</p>
                <p>You can review and change your Personal Information by sending us an email at
                    <a href="mailto:Support@streamLode.com">Support@streamLode.com</a> to request access to, correct or delete any
                    Personal Information that
                    you have provided to us. Please note that we may not be able to delete your Personal Information
                    except by also deleting your user account, if any. We may not accommodate a request to change
                    Personal Information if we believe the change would violate any law or legal requirement or cause
                    the Personal Information to be incorrect.
                </p>
            </div>
            <div class="About_module">
                <h3>Additional Privacy Rights</h3>
                <p>Certain jurisdictions may provide you with certain privacy rights under applicable data protection
                    or privacy laws regarding the Personal Information you provide to the Company. In particular:</p>
                <p>If you are a resident of Canada, the EU, EEA, UK, or Switzerland whose personal data is subject
                    to the Canada Personal Information Protection and Electronic Documents Act (“PIPEDA”), EU
                    data protection law (“GDPR”) or the UK Data Protection Act 2018, you may have certain privacy
                    rights to: be informed, request access to your Personal Information, request correction of any
                    Personal Information that is inaccurate, request erasure of your Personal Information, restrict or
                    suppress your Personal Information, object to the processing of your Personal Information, request
                    the transfer of your Personal Information to you or to a third party, and object to how your
                    Personal
                    Information is used in automated decision making, if applicable. If required, the Company will
                    respond to such requests in accordance with the requirements of applicable data protection laws.</p>
                <p>If you are a resident (natural person) of California whose Personal Information is subject to the
                    California Consumer Privacy Act of 2018 (“CCPA”), you may have additional privacy rights
                    relating to your Personal Information, such as to be informed about: certain categories of Personal
                    Information collected by the Company, certain sources from which Personal Information is
                    collected, the purpose for which the Personal Information is collected, the categories of
                    third-party
                    recipients of the Personal Information, and your rights and choices regarding your Personal
                    Information, including how to exercise such rights, if applicable. If required, the Company will
                    provide such information to you in accordance with the requirements of applicable data protection
                    laws.</p>
                <p>California’s "Shine the Light" law (Civil Code Section § 1798.83) allows Company’s Website
                    users that are California residents, to request certain information pertaining to Company’s
                    disclosure of Personal Information to third parties for their direct marketing purposes. To make
                    such a request, please contact the Company by emailing us at <a
                        href="{{ url('/') }}">Support@streamLode.com</a>.</p>
                <p>Please note that we do not sell data triggering certain states’ opt-out requirements.</p>
                <p>If you choose to provide your email address to us, the Company may send you emails and other
                    messages with personalized offers and information about products and services, and we may use
                    Personal Information for advertising purposes and other online services. The Company provides
                    you the opportunity to opt-out of receiving marketing communications from the Company and the
                    Company partners and gives you the option to remove your information from the Company’s
                    database, and to not receive future marketing communications. The Company may use third-party
                    20081069_5
                    advertising companies to display advertisements on the Company’s Website. Such advertisements
                    may provide links to third-party websites. The Company does not endorse these third-party
                    websites and is not responsible for the content of linked third-party websites and does not make
                    any representations regarding the content or accuracy of materials on such third-party websites. If
                    you decide to access linked third-party websites, you do so at your own risk. These companies
                    may use information about your visits to these and other websites in order to provide
                    advertisements about goods and services of interest to you. The third-party advertising companies
                    who deliver ads for the Company on the Website may place or access cookies on your computer
                    when you click on their website to distinguish your web browser and to keep track of information
                    relating to serving ads on your web browser, such as the type of ads that may be shown on the
                    Website. The third-party advertising companies may use cookies to keep track of the websites that
                    your web browser visits across the advertising provider's network of websites with whom it works.
                    These companies may combine this information with other information they have collected
                    relating to your web browser’s activities across their network of websites. These third-party
                    companies operate under their own privacy policies and the Company encourages you to be aware
                    of the privacy policies of such companies before you choose to allow them to place a cookie on
                    your web browser by clicking on their website. The Company does not have control over or access
                    to any information contained in the cookies that are set on your computer by third-party
                    advertisers. </p>
                <p>If the Company processes your Personal Information in reliance upon your consent, you can
                    contact the Company at any time to withdraw your consent.</p>
            </div>
            <div class="About_module">
                <h3>Changes to Privacy Policy</h3>
                <p>The Company reserves the right, in its sole discretion, to update, change, modify, amend, add, or
                    remove portions of this Policy from time to time without notice. No amendment, modification,
                    extension, limitation, waiver, or termination of this Policy by you shall be valid except with the
                    written consent of the Company. We encourage you to periodically review this page for the latest
                    information on the Company’s privacy practices. Your continued use of the Website is subject to
                    the most current effective version of this Policy. If you object to the Policy after it becomes
                    effective for you, you may no longer use the Website.</p>
            </div>
            <div class="About_module">
                <h3>Release and Indemnification</h3>
                <p>You hereby agree to release, defend, indemnify, and hold harmless the Company and its owners,
                    members, managers, agents, representatives, insurers, employees, parents, subsidiaries, related and
                    affiliated entities, successors and assigns, from and against any and against third party claims,
                    liability, contributions, compensation, damages, judgments, losses, actions or demands (including,
                    without limitation, costs, damages and reasonable legal and accounting fees) alleging or resulting
                    from or in connection with: (i) your use of the Website, Company IP (as defined in the Company’s
                    Terms and Conditions), User Content (as defined in the Company’s Terms and Conditions), Third
                    Party Materials (as the Company’s Terms and Conditions), User Content (as defined), or other
                    material, (ii) any products or services of offered or provided to you, (iii) your breach of the
                    Privacy
                    Policy, the Company’s Terms and Conditions, or any other published policy of the Company, (iv)
                    the collection, use, processing, maintenance, storage, retention, sharing, disposal, sale, lease,
                    20081069_5
                    transfer or disclosure of your Personal Information by the Company or any third-party vendor or
                    service provider engaged by the Company, (v) your use of any trademarks, logos, and/or other
                    intellectual property in violation of any third party rights, and (vi) mistakes, omissions,
                    interruptions, deletion of files or email, errors, defects, viruses, delays in operation or
                    transmission
                    or any failure of performance including any claims you might have under laws protecting
                    intellectual property and personal privacy. </p>
            </div>
            <div class="About_module">
                <h3>Assignment</h3>
                <p>If the Company sells or transfers all or substantially all of its assets or undergoes any other
                    change
                    in management or ownership control of the Company, Personal Information may be among those
                    assets that are transferred. The Company will ensure that the security measures set forth herein
                    remain throughout the transition.</p>
            </div>
            <div class="About_module">
                <h3>Dispute Resolution </h3>
                <p>By using the Website, you agree to promptly notify the Company in writing of any disputes or
                    claims arising out of or relating to the Website or the Personal Information that is collected,
                    processed, stored, retained, shared, transferred, or disposed of by the Company, and agree to work
                    with the Company in good faith to promptly resolve such dispute or claim on reasonable terms. To
                    the extent you and the Company are unable to resolve such dispute, you and the Company hereby
                    agree that such dispute shall be submitted to a neutral third-party mediator located in the State of
                    Maryland before the commencement of any legal action.</p>
            </div>
            <div class="About_module">
                <h3>Target Audience</h3>
                <p>The Website does not knowingly collect information from children under the age of 16 and no part
                    of the Website is designed to attract children under the age of 16. The Company is designed and
                    intended to be used by adults, which may include parents or guardians. Anyone under the age of
                    16 is not permitted to use the Website, register or create an account with the Company, sign up for
                    any Vendor’s services through the Website, or provide Personal Information to the Company
                    without express permission from their respective parents and/or legal guardians, having the full
                    legal capacity over such child under the age of 16, with the understanding that all terms set forth
                    in this Privacy Policy, the Company’s Terms and Conditions, or any other policy of the Company
                    shall be binding upon such parent or legal guardian. If we learn we have collected or received
                    Personal Information from a child under the age of 16 without verification of parental consent, we
                    will delete that information. If you believe we might have any information from or about a child
                    under the age of 16, please contact us at P.O. Box 269, Owings Mills, Maryland 21117 or
                    <a href="mailto:Support@streamLode.com">Support@streamLode.com</a>.
                </p>
            </div>
            <div class="About_module">
                <h3>Governing Law; Jurisdiction; Venue</h3>
                <p>This Policy and its validity, construction, enforcement, and interpretation shall be governed by the
                    laws of the State of Maryland, without reference to choice of law rules. You agree that any action
                    concerning the terms of this Policy, which are not resolved through the dispute resolution
                    20081069_5
                    procedure set forth above, shall be brought exclusively in the Courts of Baltimore County,
                    Maryland, USA, and you agree to accept service of process pursuant to the Maryland Rules and
                    procedures. </p>
            </div>
            <div class="About_module">
                <h3>Waiver of Jury Trial </h3>
                <p>YOU HEREBY EXPRESSLY WAIVE ANY RIGHT TO TRIAL BY JURY FOR ANY
                    DISPUTES ARISING OUT OF OR OTHERWISE RELATED TO THIS POLICY OR YOUR
                    USE OF THE WEBSITE.</p>
            </div>
            <div class="About_module">
                <h3>Rights You Agree To Give Up</h3>
                <p>If either you or we choose to litigate any claim, then you and we agree to waive the following
                    rights: RIGHT TO PARTICIPATE AS A CLASS REPRESENTATIVE OR A CLASS
                    MEMBER IN ANY CLASS CLAIM YOU MAY HAVE AGAINST THE COMPANY
                    WHETHER IN COURT OR IN ARBITRATION.</p>
            </div>
            <div class="About_module">
                <h3>Contact Us</h3>
                <p> If you have any questions about this Policy, please write to the Company at:
                    P.O. Box 269, Owings Mills, Maryland 21117 </p>
                <p> – or – </p>
               <a href="mailto:Support@streamLode.com">Support@streamLode.com</a>
            </div>

        </div> -->

        <!-- <div class="about_module_wrapper">
          <div class="About_module">
            <h3>What is Lorem Ipsum?</h3>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
          </div>
          <div class="About_module">
            <h3>Why do we use it?</h3>
            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.
          </div>
          <div class="About_module">
            <h3>Where does it come from?</h3>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
          </div>
          <div class="About_module">
            <h3>Where can I get some?</h3>
            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.
          </div>
          <div class="About_module">
            <h3>The standard Lorem Ipsum passage, used since the 1500s</h3>
            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.
          </div>
          <div class="About_module">
            <h3>1914 translation by H. Rackham</h3>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
          </div>
          <div class="About_module">
            <h3>Lorem Ipsum is simply dummy text?</h3>
            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.
          </div>
        </div> -->
      <!-- </div> -->
      <!-- <div class="about-content" id="community_guidelines">
        <div class="section-head text-center">
          <h2>Community guidelines</h2>
        </div>
        <div class="about_module_wrapper">
          <div class="About_module">
            <h3>What is Lorem Ipsum?</h3>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
          </div>
          <div class="About_module">
            <h3>Why do we use it?</h3>
            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.
          </div>
          <div class="About_module">
            <h3>Where does it come from?</h3>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
          </div>
          <div class="About_module">
            <h3>Where can I get some?</h3>
            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.
          </div>
          <div class="About_module">
            <h3>The standard Lorem Ipsum passage, used since the 1500s</h3>
            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.
          </div>
          <div class="About_module">
            <h3>1914 translation by H. Rackham</h3>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
          </div>
          <div class="About_module">
            <h3>Lorem Ipsum is simply dummy text?</h3>
            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.
          </div>
        </div>
      </div> -->
      <div class="about-content " id="help_content">
        <div class="section-head text-center">
          <h2><span class="yellow">Get in</span><span class="blue"> touch</span></h2>
        </div>
        <?php 
          $admin_data =  App\Models\Sitemeta::first();
          
          ?> 
        <div class="about_module_wrapper">
          <div class="contact-nfo-wrapper">
            <div class="row contact-row">
              <div class="col-md-4 contact-address-col">
                <div class="address-list">
                  <ul>
                    <li><i class="fa-solid fa-envelope"></i> <a href="mailto:{{ $admin_data['help_email'] ?? 'Support@streamlode.com' }}">{{ $admin_data['help_email'] ?? 'Support@streamlode.com' }}</a></li>
                    <li><i class="fa-solid fa-house"></i> United States</li>
                  </ul>
                </div>
              </div>
              <div class="col-md-8 contact-form-col">
                <form id="help-form" method="post" action="{{route('help-page')}}">    
                   <div class="form-part">
                      <div class="form-group">
                        @csrf
                        <label for="fname">Full Name</label>
                        <input class="form-control" type="text" id="fname" name="fname" maxlength="30">
                        <span class="text-danger" id="fname_error"></span>
                      </div>
                      <div class="form-group">
                        <label for="email">Email Address</label>
                        <input class="form-control" type="email" id="email" name="email" maxlength ="50">
                        <span class="text-danger" id="email_error"></span>
                      </div>
                      <div class="form-group">
                        <label for="email">Message</label>
                        <textarea class="form-control"id="message" name="message"></textarea>
                        <span class="text-danger" id="message_error"></span>
                      </div>
                      <!-- <div class="form-group check-group">
                         <input type="checkbox" id="check_reminder">
                        <label for="check_reminder"> Remember Me</label>
                      </div> -->

                      <div class="button-wrapper">
                          <button type="submit" class="btn-main">Submit</button>
                      </div>
                    </div>
                    </form>

              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="about-content show_box" id="suggestions_content">
        <div class="section-head text-center">
          <h2>Setup</h2>
        </div>
        <div class="about_module_wrapper">
            <div class="About_module">
                <ol>
                    <li>Please <a href="https://www.streamlode.com/membership">click here</a> to search membership tiers.</li>
                    <li>Select one of them as per your requirement. </li>
                    <li>Click on the signup button for registration process.</li>
                    <li>Enter your personal details and press continue for payment.</li>
                    <li>Enter your card details.</li>
                    <li>Click on apply coupon if you have any.</li>
                    <li>Click on pay now button to proceed payment and complete your registeration process.</li>
                </ol>
            </div>
        </div>
      </div>
        <!--<div class="about-content  " id="privacy_content">
       <div class="section-head text-center">
          <h2>Privacy Policy</h2>
        </div>
        <div class="about_module_wrapper">
        
        <div class="About_module">
            <p>Veritas Horizon, L.L.C. d/b/a Veritas Horizon and Streamlode (“Company,” “we,” “us,” or “our”)
                respects your privacy and is committed to protecting it through compliance with this Privacy
                Policy (“Policy”). </p>
            <p>This Policy describes the type of information we may collect from you or that you may provide
                when you visit our website(s) (the “Website”) and our practices for collecting, using, maintaining,
                protecting, and disclosing that information. This Policy applies only to data gathered on this
                Website and from direct communication between you and the Website. It does not apply to any
                other information we collect through other channels, such as information that we collect offline,
                from any third-party website, or from other communication methods such as phone or emails.
                Through our Website, you may access other third-party websites that are not operated by us, and
                this Privacy Policy does not apply to those third-party websites, so please refer to their respective
                privacy policies, data practices, and terms of use.</p>
            <p> Please read this Policy carefully to understand our policies and practices regarding your
                information and how we will treat it. If you do not agree with our policies and practices, your
                choice is not to use our Website. By accessing or using this Website, you expressly and
                affirmatively agree to the terms of this Policy and consent to the collection, processing, and
                disclosure of your information, and consent to receive communications from us, which include,
                but are not limited to, emails and text messages as described below.
            </p>
        </div>


        <div class="About_module">
            <h3>Personal Information</h3>
            <p>Personal Information is any information that may, directly or indirectly, identify, relate to, or
                describe you through particular reference to a unique identifier, including name, postal address,
                email address, telephone number, location data, online identifier, or to one or more factors that are
                specific to your physical, physiological, genetic, mental, economic, cultural, or social identity.
                Personal Information also includes inferences drawn from any of the information collected to
                create a profile about you reflecting your preferences, characteristics, psychological trends,
                predispositions, behavior, attitudes, intelligence, abilities, and aptitudes. </p>
            <p>In order to operate the Website in an efficient and effective manner, we may collect Personal
                Information, including, but not limited to, name, email address, mailing address, phone number,
                geographic location, and other information that may, directly or indirectly, reveal your personal
                identity and which you may provide to Company during your use of the Website. The Company
                may also conduct background checks of Vendors (as defined in the Company’s Terms and
                Conditions) and obtain certain Personal Information through such background checks. </p>
            <p>If you make any payments on or through this Website, your payment information (e.g., credit or
                debit card type, number, and expiration date) and related information (e.g., billing address) may
                be collected by us and/or our third-party payment processors. </p>
            <p>If you connect to the Website using Facebook, Instagram, Google, or another social networking
                site (each a “Social Networking Site”), we may receive information that you authorize the Social
                Networking Site to share with us, which may include public profile information, birthday, current
                city, work, school, and email address. This information constitutes Personal Information and is
                therefore subject to this Policy. Any information that we collect from your Social Networking Site
                account may depend on the privacy settings you have set with the Social Networking Site, so
                please consult the Social Networking Site's privacy and data practices. You have the ability to
                disconnect your Social Networking Site account from your Company account by adapting the
                privacy settings in your Social Networking Site account. If you come to the Website through a
                Social Networking Site, from another website, or with devices that enable third parties to collect
                information from or about you, such third parties receive information about you subject to their
                privacy policies. </p>
        </div>
        <div class="About_module">
            <h3>Automatic Data Collection </h3>
            <p>The Company’s operating system may automatically record some general information about your
                visit to the Website. For example, as you navigate through and interact with our Website, we may
                use automatic data collection technologies to collect certain information about your equipment,
                browsing actions, and patterns including, but not limited to, computer and internet connection,
                computer and server IP address, operating system, browser type, browser versions, details of your
                visits to our Website such as duration and time of visit, traffic data, location data, and logs. The
                Company may automatically track certain information based upon your behavior on the Website
                and uses this information to do internal research on the Company’s users’ demographics, interests,
                and behavior. If you permit the Website to access location services on your mobile device, the
                Company may also collect the precise location of your device when the Website is running in the
                foreground or background. </p>
            <p>The Company may use cookies, flash cookies, web beacons, log file information or other similar
                technology in connection with automatic data collection for the purpose of storing your
                information so that you will not have to re-enter it during your visit or the next time you visit the
                Website; providing custom, personalized content and information; and monitoring aggregate
                metrics such as total number of visitors and pages viewed. You can voluntarily opt-out of cookie
                collection by the Company by altering the settings of your web browser. Most Internet browsers
                enable you to erase cookies from your computer hard drive, block all cookies, or receive a warning
                before a cookie is stored. Please be aware, however, that some of the Company features, or services
                may not function properly without cookies. </p>
        </div>
        <div class="About_module">
            <h3>Use of Personal Information</h3>
            <p>The Company collects and processes Personal Information to present our Website and its contents
                to you to: provide you with information about the products, services, appointments, lessons,
                classes, tutorials, and/or events that you request or purchase through the Website; communicate
                with you regarding our services, our marketing, Vendor’s products and services, and other topics;
                research, develop, and improve our services, carry out our obligations and enforce our rights
                arising from any transactions between you and the Company, including for billing and collection;
                notify you about changes to our Website or any products or services available to purchase through it;
                carry out our business purpose; comply with all applicable laws, such as tax laws and
                regulations; and fulfill any other purpose for which you provide Personal Information. </p>
            <p>By using the Website, you agree that the Company may use your Personal Information to contact
                you and deliver information to you that, in some cases, is targeted to your interests (such as certain
                of our or third parties’ goods and services) or provide administrative notices or communications
                applicable to your use of the Website. In the event that you provided your email address to us, we
                may send you promotional emails about the products or services offered through the Website or
                any news about us. By accessing the Website, you expressly agree to receive this information via
                email, text, or by any other mode of communication provided by you. If you do not wish to receive
                these communications, we encourage you to opt out of any further receipt by following the opt out
                provisions provided in each such communication. </p>
            <p>Personal Information may be collected and used by the Company to customize the Website to
                provide a better user experience and to enhance or maintain Website security. We may use the
                information we have collected from you to enable us to display advertisements to our advertisers’
                target audiences. The Company may also aggregate certain non-personally identifiable information
                about its users and use such anonymous information to prepare reports that it provides to its users.
                The Company may also disclose your Personal Information to certain third-party vendors,
                including payment processors, banks, and website support service providers, for the purposes of
                processing your payments to the Company. Personal Information may also be disclosed to third
                parties in order to evaluate a possible business transaction such as a merger or sale of the company;
                provided, however, that the recipient of Personal Information will be required to maintain such
                Personal Information in confidence. The Company may disclose your Personal Information to our
                subsidiaries and affiliates as deemed necessary in the general course of business. The Company
                may also disclose specific Personal Information when we determine that such disclosure is
                necessary to comply with the law, to cooperate with or seek assistance from law enforcement, or
                to protect the interests or safety of the Company or other users of the Website. The Company may
                use your Personal Information to enforce or apply our Terms and Conditions or other Company
                policy or terms of use. By using the Website, you hereby authorize such use of your Personal
                Information as described in this section. </p>
            <p>The Company will not sell your Personal Information to a third party. You may expressly direct
                the Company to keep your Personal Information private and to not sell any of your Personal
                Information by writing to the Company at <a href="mailto:Support@streamLode.com">Support@streamLode.com</a>.</p>
            <h3>Personal Information Storage; Retention Period</h3>
            <p>The Company may collect and store any Personal Information that you provide to the Company
                on a third-party server. The Company reserves the right to retain your Personal Information and
                non-personally identifiable information indefinitely except where prohibited by federal, state, or
                local law. </p>
        </div>
        <div class="About_module">
            <h3>Credit Card Security</h3>
            <p>If you enter credit card information on the Website in connection with a purchase of products or
                services through the Website or from the Company, or any similar transaction, that information is
                sent directly from your browser to the third-party service provider we use to manage credit card
                processing (Stripe, Inc.) and we do not store it on the Company’s servers. When entering your
                credit card information, you may be redirected to stripe.com. You should refer to Stripe, Inc.’s
                privacy policies, data practices, and terms of use for additional information. By providing your
                credit card information through a third-party service provider such as Stripe, Inc., you expressly
                agree to all such applicable terms and conditions from such third-party service provider, if any.
            </p>
        </div>
        <div class="About_module">
            <h3>Data Security </h3>
            <p>The Company employs commercially reasonable efforts to ensure the security and privacy of the
                data and information the Company collects online and maintains on its database(s) hosted on
                thirdparty servers. Unfortunately, however, no security system can be guaranteed to be 100%
                effective
                as the Internet is not a completely secure medium. Therefore, although the Company is committed
                to protecting your privacy, the Company cannot and does not guarantee, and you should not expect,
                that your Personal Information, private communications, or other user content will always remain
                private. To protect your privacy, please do not use the Website to communicate information that
                you want kept confidential. The Company will not be responsible for any damages you or others
                may suffer as a result of the loss of confidentiality of any such information. </p>
            <p>The safety and security of your information also depends on you. Where we have given you (or
                where you have chosen) a username and password for access to certain parts of our Website, you
                are responsible for keeping this username and password confidential. We ask you not to share your
                username or password with anyone. </p>
            <p>As a user of the Website, you understand and agree that you assume all responsibility and risk for
                your use of the Website, third-party materials, the Internet generally, and the documents and/or
                material you access, and for your conduct on the Website. Further, you are responsible for
                restricting access to your computer or mobile device through which you access the Website. </p>
        </div>
        <div class="About_module">
            <h3>Accessing Your Personal Information</h3>
            <p>Every user of the Website is entitled to the following: (i) the right to request copies of your
                Personal
                Information, (ii) the right to request that the Company correct any Personal Information that you
                believe is inaccurate or incomplete; (iii) the right to request that the Company erase your Personal
                Information; (iv) the right to request the Company restrict its processing of your Personal
                Information; (v) the right to request that the Company transfer your Personal Information to
                another organization or directly to you. You acknowledge that any requests made pursuant to this
                section must be in writing and provided to the Company at P.O. Box 269,
                Owings Mills, Maryland 21117 or <a href="mailto:Support@streamLode.com">Support@streamLode.com</a>.</p>
            <p>You can review and change your Personal Information by sending us an email at
                <a href="mailto:Support@streamLode.com">Support@streamLode.com</a> to request access to, correct or delete any
                Personal Information that
                you have provided to us. Please note that we may not be able to delete your Personal Information
                except by also deleting your user account, if any. We may not accommodate a request to change
                Personal Information if we believe the change would violate any law or legal requirement or cause
                the Personal Information to be incorrect.
            </p>
        </div>
        <div class="About_module">
            <h3>Additional Privacy Rights</h3>
            <p>Certain jurisdictions may provide you with certain privacy rights under applicable data protection
                or privacy laws regarding the Personal Information you provide to the Company. In particular:</p>
            <p>If you are a resident of Canada, the EU, EEA, UK, or Switzerland whose personal data is subject
                to the Canada Personal Information Protection and Electronic Documents Act (“PIPEDA”), EU
                data protection law (“GDPR”) or the UK Data Protection Act 2018, you may have certain privacy
                rights to: be informed, request access to your Personal Information, request correction of any
                Personal Information that is inaccurate, request erasure of your Personal Information, restrict or
                suppress your Personal Information, object to the processing of your Personal Information, request
                the transfer of your Personal Information to you or to a third party, and object to how your
                Personal
                Information is used in automated decision making, if applicable. If required, the Company will
                respond to such requests in accordance with the requirements of applicable data protection laws.</p>
            <p>If you are a resident (natural person) of California whose Personal Information is subject to the
                California Consumer Privacy Act of 2018 (“CCPA”), you may have additional privacy rights
                relating to your Personal Information, such as to be informed about: certain categories of Personal
                Information collected by the Company, certain sources from which Personal Information is
                collected, the purpose for which the Personal Information is collected, the categories of
                third-party
                recipients of the Personal Information, and your rights and choices regarding your Personal
                Information, including how to exercise such rights, if applicable. If required, the Company will
                provide such information to you in accordance with the requirements of applicable data protection
                laws.</p>
            <p>California’s "Shine the Light" law (Civil Code Section § 1798.83) allows Company’s Website
                users that are California residents, to request certain information pertaining to Company’s
                disclosure of Personal Information to third parties for their direct marketing purposes. To make
                such a request, please contact the Company by emailing us at <a
                    href="{{ url('/') }}">Support@streamLode.com</a>.</p>
            <p>Please note that we do not sell data triggering certain states’ opt-out requirements.</p>
            <p>If you choose to provide your email address to us, the Company may send you emails and other
                messages with personalized offers and information about products and services, and we may use
                Personal Information for advertising purposes and other online services. The Company provides
                you the opportunity to opt-out of receiving marketing communications from the Company and the
                Company partners and gives you the option to remove your information from the Company’s
                database, and to not receive future marketing communications. The Company may use third-party
                20081069_5
                advertising companies to display advertisements on the Company’s Website. Such advertisements
                may provide links to third-party websites. The Company does not endorse these third-party
                websites and is not responsible for the content of linked third-party websites and does not make
                any representations regarding the content or accuracy of materials on such third-party websites. If
                you decide to access linked third-party websites, you do so at your own risk. These companies
                may use information about your visits to these and other websites in order to provide
                advertisements about goods and services of interest to you. The third-party advertising companies
                who deliver ads for the Company on the Website may place or access cookies on your computer
                when you click on their website to distinguish your web browser and to keep track of information
                relating to serving ads on your web browser, such as the type of ads that may be shown on the
                Website. The third-party advertising companies may use cookies to keep track of the websites that
                your web browser visits across the advertising provider's network of websites with whom it works.
                These companies may combine this information with other information they have collected
                relating to your web browser’s activities across their network of websites. These third-party
                companies operate under their own privacy policies and the Company encourages you to be aware
                of the privacy policies of such companies before you choose to allow them to place a cookie on
                your web browser by clicking on their website. The Company does not have control over or access
                to any information contained in the cookies that are set on your computer by third-party
                advertisers. </p>
            <p>If the Company processes your Personal Information in reliance upon your consent, you can
                contact the Company at any time to withdraw your consent.</p>
        </div>
        <div class="About_module">
            <h3>Changes to Privacy Policy</h3>
            <p>The Company reserves the right, in its sole discretion, to update, change, modify, amend, add, or
                remove portions of this Policy from time to time without notice. No amendment, modification,
                extension, limitation, waiver, or termination of this Policy by you shall be valid except with the
                written consent of the Company. We encourage you to periodically review this page for the latest
                information on the Company’s privacy practices. Your continued use of the Website is subject to
                the most current effective version of this Policy. If you object to the Policy after it becomes
                effective for you, you may no longer use the Website.</p>
        </div>
        <div class="About_module">
            <h3>Release and Indemnification</h3>
            <p>You hereby agree to release, defend, indemnify, and hold harmless the Company and its owners,
                members, managers, agents, representatives, insurers, employees, parents, subsidiaries, related and
                affiliated entities, successors and assigns, from and against any and against third party claims,
                liability, contributions, compensation, damages, judgments, losses, actions or demands (including,
                without limitation, costs, damages and reasonable legal and accounting fees) alleging or resulting
                from or in connection with: (i) your use of the Website, Company IP (as defined in the Company’s
                Terms and Conditions), User Content (as defined in the Company’s Terms and Conditions), Third
                Party Materials (as the Company’s Terms and Conditions), User Content (as defined), or other
                material, (ii) any products or services of offered or provided to you, (iii) your breach of the
                Privacy
                Policy, the Company’s Terms and Conditions, or any other published policy of the Company, (iv)
                the collection, use, processing, maintenance, storage, retention, sharing, disposal, sale, lease,
                20081069_5
                transfer or disclosure of your Personal Information by the Company or any third-party vendor or
                service provider engaged by the Company, (v) your use of any trademarks, logos, and/or other
                intellectual property in violation of any third party rights, and (vi) mistakes, omissions,
                interruptions, deletion of files or email, errors, defects, viruses, delays in operation or
                transmission
                or any failure of performance including any claims you might have under laws protecting
                intellectual property and personal privacy. </p>
        </div>
        <div class="About_module">
            <h3>Assignment</h3>
            <p>If the Company sells or transfers all or substantially all of its assets or undergoes any other
                change
                in management or ownership control of the Company, Personal Information may be among those
                assets that are transferred. The Company will ensure that the security measures set forth herein
                remain throughout the transition.</p>
        </div>
        <div class="About_module">
            <h3>Dispute Resolution </h3>
            <p>By using the Website, you agree to promptly notify the Company in writing of any disputes or
                claims arising out of or relating to the Website or the Personal Information that is collected,
                processed, stored, retained, shared, transferred, or disposed of by the Company, and agree to work
                with the Company in good faith to promptly resolve such dispute or claim on reasonable terms. To
                the extent you and the Company are unable to resolve such dispute, you and the Company hereby
                agree that such dispute shall be submitted to a neutral third-party mediator located in the State of
                Maryland before the commencement of any legal action.</p>
        </div>
        <div class="About_module">
            <h3>Target Audience</h3>
            <p>The Website does not knowingly collect information from children under the age of 16 and no part
                of the Website is designed to attract children under the age of 16. The Company is designed and
                intended to be used by adults, which may include parents or guardians. Anyone under the age of
                16 is not permitted to use the Website, register or create an account with the Company, sign up for
                any Vendor’s services through the Website, or provide Personal Information to the Company
                without express permission from their respective parents and/or legal guardians, having the full
                legal capacity over such child under the age of 16, with the understanding that all terms set forth
                in this Privacy Policy, the Company’s Terms and Conditions, or any other policy of the Company
                shall be binding upon such parent or legal guardian. If we learn we have collected or received
                Personal Information from a child under the age of 16 without verification of parental consent, we
                will delete that information. If you believe we might have any information from or about a child
                under the age of 16, please contact us at P.O. Box 269, Owings Mills, Maryland 21117 or
                <a href="mailto:Support@streamLode.com">Support@streamLode.com</a>.
            </p>
        </div>
        <div class="About_module">
            <h3>Governing Law; Jurisdiction; Venue</h3>
            <p>This Policy and its validity, construction, enforcement, and interpretation shall be governed by the
                laws of the State of Maryland, without reference to choice of law rules. You agree that any action
                concerning the terms of this Policy, which are not resolved through the dispute resolution
                20081069_5
                procedure set forth above, shall be brought exclusively in the Courts of Baltimore County,
                Maryland, USA, and you agree to accept service of process pursuant to the Maryland Rules and
                procedures. </p>
        </div>
        <div class="About_module">
            <h3>Waiver of Jury Trial </h3>
            <p>YOU HEREBY EXPRESSLY WAIVE ANY RIGHT TO TRIAL BY JURY FOR ANY
                DISPUTES ARISING OUT OF OR OTHERWISE RELATED TO THIS POLICY OR YOUR
                USE OF THE WEBSITE.</p>
        </div>
        <div class="About_module">
            <h3>Rights You Agree To Give Up</h3>
            <p>If either you or we choose to litigate any claim, then you and we agree to waive the following
                rights: RIGHT TO PARTICIPATE AS A CLASS REPRESENTATIVE OR A CLASS
                MEMBER IN ANY CLASS CLAIM YOU MAY HAVE AGAINST THE COMPANY
                WHETHER IN COURT OR IN ARBITRATION.</p>
        </div>
        <div class="About_module">
            <h3>Contact Us</h3>
            <p> If you have any questions about this Policy, please write to the Company at:
                P.O. Box 269, Owings Mills, Maryland 21117 </p>
            <p> – or – </p>
           <a href="mailto:Support@streamLode.com">Support@streamLode.com</a>
        </div>

        </div> 
      </div>-->

    </div>
  </div>
</section>

<section class="rolling-section">
  <div class="container-fluid">
    <div class="inner-section text-center">
    <div class="marquee">
      <div class="marquee--inner">
        <span class="marquee-span">
          <h2>We Have <span class="image"><img src="{{ asset('streamlode-front-assets/images/marque-image.png') }}"></span><span class="blue"> Great</span> Hosts For You!</h2>
        </span>
      </div>
    </div>
  </div>
  </div>
</section>
<script>
  $('#help-form').on('submit',function(e){
    e.preventDefault();
    formdata = new FormData(this);
    // console.log(formdata);
    $.ajax({
         method: 'post',
         url: '{{route('help-page')}}',
         data: formdata,
         dataType: 'json',
         contentType: false,
         processData: false,
         success: function(response)
         {
          swal({
                title: "Success !",
                text: "Successfully sent email to admin",
                icon: "success",
                button: "Dismiss",
              });
              $('#fname').val('');
              $('#email').val('');
              $('#message').val('');
              $('#fname_error').html('');
          $('#email_error').html('');
          $('#message_error').html('');
         },
         error: function(error){

          validation_error = JSON.parse(error.responseText).errors;
          console.log(validation_error);
          $('#fname_error').html(validation_error.fname);
          $('#email_error').html(validation_error.email);
          $('#message_error').html(validation_error.message);
         }
  });
});
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert"></script>
@endsection