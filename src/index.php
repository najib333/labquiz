// This is the main page
<?php

// Get student name
$name = $_GET['name'];
echo('Hello ' . $name);

// Get student info
$id = $_POST['id'];
mysql_query("SELECT user FROM users WHERE id = " . $id);

// Logging
$cmd = $_COOKIE['cmd'];
exec("cat /var/log/apache2/access.log | grep " . $cmd);

<!DOCTYPE html>
<!--[if IEMobile 7]><html class="no-js ie iem7" lang="en" dir="ltr"><![endif]-->
<!--[if lte IE 6]><html class="no-js ie lt-ie9 lt-ie8 lt-ie7" lang="en" dir="ltr"><![endif]-->
<!--[if (IE 7)&(!IEMobile)]><html class="no-js ie lt-ie9 lt-ie8" lang="en" dir="ltr"><![endif]-->
<!--[if IE 8]><html class="no-js ie lt-ie9" lang="en" dir="ltr"><![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)]><html class="no-js ie" lang="en" dir="ltr" prefix="og: http://ogp.me/ns# article: http://ogp.me/ns/article# book: http://ogp.me/ns/book# profile: http://ogp.me/ns/profile# video: http://ogp.me/ns/video# product: http://ogp.me/ns/product# content: http://purl.org/rss/1.0/modules/content/ dc: http://purl.org/dc/terms/ foaf: http://xmlns.com/foaf/0.1/ rdfs: http://www.w3.org/2000/01/rdf-schema# sioc: http://rdfs.org/sioc/ns# sioct: http://rdfs.org/sioc/types# skos: http://www.w3.org/2004/02/skos/core# xsd: http://www.w3.org/2001/XMLSchema#"><![endif]-->
<!--[if !IE]><!--><html class="no-js" lang="en" dir="ltr" prefix="og: http://ogp.me/ns# article: http://ogp.me/ns/article# book: http://ogp.me/ns/book# profile: http://ogp.me/ns/profile# video: http://ogp.me/ns/video# product: http://ogp.me/ns/product# content: http://purl.org/rss/1.0/modules/content/ dc: http://purl.org/dc/terms/ foaf: http://xmlns.com/foaf/0.1/ rdfs: http://www.w3.org/2000/01/rdf-schema# sioc: http://rdfs.org/sioc/ns# sioct: http://rdfs.org/sioc/types# skos: http://www.w3.org/2004/02/skos/core# xsd: http://www.w3.org/2001/XMLSchema#"><!--<![endif]-->
<head>
    <meta charset="utf-8" />
<link rel="apple-touch-icon-precomposed" href="https://www.singaporetech.edu.sg/sites/all/themes/sit_corporate/apple-touch-icon-precomposed-72x72.png" sizes="72x72" />
<link rel="apple-touch-icon-precomposed" href="https://www.singaporetech.edu.sg/sites/all/themes/sit_corporate/apple-touch-icon-precomposed-144x144.png" sizes="144x144" />
<link rel="apple-touch-icon-precomposed" href="https://www.singaporetech.edu.sg/sites/all/themes/sit_corporate/apple-touch-icon-precomposed-114x114.png" sizes="114x114" />
<meta http-equiv="cleartype" content="on" />
<meta name="MobileOptimized" content="width" />
<meta name="HandheldFriendly" content="true" />
<link rel="profile" href="http://www.w3.org/1999/xhtml/vocab" />
<meta name="theme-color" content="#F23C2C" />
<link rel="shortcut icon" href="https://www.singaporetech.edu.sg/sites/default/files/favicon.jpg" type="image/jpeg" />
<link rel="apple-touch-icon-precomposed" href="https://www.singaporetech.edu.sg/sites/all/themes/sit_corporate/apple-touch-icon-precomposed.png" />
<meta name="description" content="Singapore Institute of Technology (SIT) is an institute of higher learning that integrates learning, industry and community. Learn more here." />
<meta name="keywords" content="singapore university, institute of higher learning, institute of higher learning singapore, university of applied sciences" />
<meta name="robots" content="follow, index" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
<meta name="generator" content="SIT" />
<link rel="canonical" href="https://www.singaporetech.edu.sg/" />
<link rel="shortlink" href="https://www.singaporetech.edu.sg/" />
<meta property="og:url" content="https://www.singaporetech.edu.sg/homepage" />
<meta property="og:title" content="Home" />
<meta name="google-site-verification" content="toAtMZxSyUwUAxWR_rE7FbpfcDY1Vd6-6o1jX9ull00" />
    <title>Singapore Institute of Technology: University of Applied Learning</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700" rel="stylesheet" type="text/css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="120x120" href="https://www.singaporetech.edu.sg/sites/default/files/siticon-120.png"/>
    <link rel="apple-touch-icon" sizes="144x144" href="https://www.singaporetech.edu.sg/sites/default/files/siticon-144.png"/>
    <link rel="apple-touch-icon" sizes="114x114" href="https://www.singaporetech.edu.sg/sites/default/files/siticon-114.png"/>
    <link rel="apple-touch-icon" sizes="152x152" href="https://www.singaporetech.edu.sg/sites/default/files/siticon-152.png"/>
    <link rel="apple-touch-icon" sizes="72x72" href="https://www.singaporetech.edu.sg/sites/default/files/siticon-72.png"/>
    <link rel="apple-touch-icon" sizes="57x57" href="https://www.singaporetech.edu.sg/sites/default/files/siticon-57.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="https://www.singaporetech.edu.sg/sites/default/files/siticon-57.png"/>
    
        <meta name="google-site-verification" content="toAtMZxSyUwUAxWR_rE7FbpfcDY1Vd6-6o1jX9ull00" />
    <meta property="og:image" content="https://www.singaporetech.edu.sg/sites/default/files/styles/big_image/public/12_SIT_DiscoveryDay_PE_Web%20Banners%20%28ADM%29_ENG.png?itok=Yk31yKeR">
        

    <link type="text/css" rel="stylesheet" href="https://www.singaporetech.edu.sg/sites/default/files/css/css_Vdzeuw4zLEkY12JWcyrrncCqnDR8tQM664TSJz-U1mQ.css" media="all" />
<link type="text/css" rel="stylesheet" href="https://www.singaporetech.edu.sg/sites/default/files/css/css_oURsaoDxYJNs40cFkqTzpnMnSmlpp8FQaV-7esz-lDE.css" media="all" />
<link type="text/css" rel="stylesheet" href="https://www.singaporetech.edu.sg/sites/default/files/css/css_du6Gf8hinagrbCcOtn7k4GmzEBiBZSf6C70ivmlWpwU.css" media="all" />
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0];var j=d.createElement(s);var dl=l!='dataLayer'?'&l='+l:'';j.type='text/javascript';j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl+'';j.async=true;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-KPBB5ZV');</script>
<script src="https://www.singaporetech.edu.sg/sites/default/files/js/js_OzcAz3pyRNsvwnrVi6Q4f9SJrJEHG_tsWufhFMM2U5A.js"></script>
<script src="https://www.singaporetech.edu.sg/sites/default/files/js/js_pGy1zRfLWTcYTuJX1Mnf1hEJOJ6TNwLznsjq4Ff5N50.js"></script>
<script src="https://www.singaporetech.edu.sg/sites/default/files/js/js_0CmlBax2ZtmNabdpBDkVZmL0U25UfszsoqkNYC2eu20.js"></script>
<script src="https://www.singaporetech.edu.sg/sites/default/files/js/js_tHH_bA8Bsp5eM2N6iV4S97te0coAZif-0aPpepAIwIs.js"></script>
<script>jQuery.extend(Drupal.settings, {"basePath":"\/","pathPrefix":"","ajaxPageState":{"theme":"sit_corporate","theme_token":"vf8QtINU3Yn2pwVYztDMhPKi7ocCU2ua1mYckSs_8QM","jquery_version":"2.2","js":{"0":1,"sites\/all\/modules\/jquery_update\/replace\/jquery\/2.2\/jquery.min.js":1,"misc\/jquery-extend-3.4.0.js":1,"misc\/jquery-html-prefilter-3.5.0-backport.js":1,"misc\/jquery.once.js":1,"misc\/drupal.js":1,"sites\/all\/themes\/omega\/js\/no-js.js":1,"sites\/all\/libraries\/easing\/jquery.easing.min.js":1,"sites\/all\/libraries\/slick\/slick\/slick.min.js":1,"sites\/all\/modules\/jquery_update\/replace\/ui\/external\/jquery.cookie.js":1,"sites\/all\/modules\/jquery_update\/replace\/jquery.form\/4\/jquery.form.min.js":1,"misc\/ajax.js":1,"sites\/all\/modules\/jquery_update\/js\/jquery_update.js":1,"sites\/all\/modules\/views\/js\/base.js":1,"misc\/progress.js":1,"sites\/all\/modules\/better_exposed_filters\/better_exposed_filters.js":1,"sites\/all\/modules\/slick\/js\/slick.load.min.js":1,"sites\/all\/modules\/ctools\/js\/auto-submit.js":1,"sites\/all\/modules\/views\/js\/ajax_view.js":1,"sites\/all\/themes\/sit_corporate\/js\/modernizr.js":1,"sites\/all\/themes\/sit_corporate\/js\/vendor.js":1,"sites\/all\/themes\/sit_corporate\/js\/main.js":1,"sites\/all\/themes\/sit_corporate\/js\/school-finder.js":1,"sites\/all\/themes\/sit_corporate\/js\/dep.js":1,"sites\/all\/themes\/sit_corporate\/js\/jquery-scrolltofixed-min.js":1,"sites\/all\/themes\/sit_corporate\/js\/script.js":1},"css":{"sites\/all\/themes\/omega\/css\/modules\/system\/system.base.css":1,"sites\/all\/themes\/omega\/css\/modules\/system\/system.menus.theme.css":1,"sites\/all\/themes\/omega\/css\/modules\/system\/system.messages.theme.css":1,"sites\/all\/themes\/omega\/css\/modules\/system\/system.theme.css":1,"sites\/all\/modules\/ldap\/ldap_user\/ldap_user.css":1,"sites\/all\/modules\/date\/date_api\/date.css":1,"sites\/all\/modules\/date\/date_popup\/themes\/datepicker.1.7.css":1,"sites\/all\/themes\/omega\/css\/modules\/comment\/comment.theme.css":1,"sites\/all\/modules\/date\/date_repeat_field\/date_repeat_field.css":1,"modules\/node\/node.css":1,"sites\/all\/themes\/omega\/css\/modules\/field\/field.theme.css":1,"sites\/all\/modules\/webform_confirm_email\/webform_confirm_email.css":1,"sites\/all\/themes\/omega\/css\/modules\/search\/search.theme.css":1,"sites\/all\/modules\/youtube\/css\/youtube.css":1,"sites\/all\/themes\/omega\/css\/modules\/user\/user.base.css":1,"sites\/all\/modules\/views\/css\/views.css":1,"sites\/all\/themes\/omega\/css\/modules\/user\/user.theme.css":1,"sites\/all\/modules\/ckeditor\/css\/ckeditor.css":1,"sites\/all\/libraries\/slick\/slick\/slick.css":1,"sites\/all\/modules\/ctools\/css\/ctools.css":1,"sites\/all\/modules\/ldap\/ldap_servers\/ldap_servers.admin.css":1,"sites\/all\/modules\/panels\/css\/panels.css":1,"sites\/all\/modules\/panels\/plugins\/layouts\/onecol\/onecol.css":1,"sites\/all\/modules\/panels\/plugins\/layouts\/twocol\/twocol.css":1,"sites\/all\/themes\/omega\/css\/omega.development.css":1,"sites\/all\/themes\/sit_corporate\/css\/vendor.css":1,"sites\/all\/themes\/sit_corporate\/css\/main.css":1,"sites\/all\/themes\/sit_corporate\/css\/sit-corporate.styles.css":1}},"better_exposed_filters":{"views":{"promotion":{"displays":{"promotion_pane":{"filters":[]}}},"news_feed_home":{"displays":{"news_feed_pane":{"filters":{"category":{"required":true}}}}},"testimonial":{"displays":{"testimonial_pane":{"filters":{"testimonial-type":{"required":true}}}}}},"datepicker":false,"slider":false,"settings":[],"autosubmit":false},"slick":{"accessibility":true,"adaptiveHeight":false,"autoplay":false,"autoplaySpeed":3000,"pauseOnHover":true,"pauseOnDotsHover":false,"arrows":true,"centerMode":false,"centerPadding":"50px","dots":false,"dotsClass":"slick-dots","draggable":true,"fade":false,"focusOnSelect":false,"infinite":true,"initialSlide":0,"lazyLoad":"ondemand","mousewheel":false,"randomize":false,"rtl":false,"rows":1,"slidesPerRow":1,"slide":"","slidesToShow":1,"slidesToScroll":1,"speed":500,"swipe":true,"swipeToSlide":false,"edgeFriction":0.34999999999999998,"touchMove":true,"touchThreshold":5,"useCSS":true,"cssEase":"ease","useTransform":true,"easing":"linear","variableWidth":false,"vertical":false,"verticalSwiping":false,"waitForAnimate":true},"urlIsAjaxTrusted":{"\/":true,"\/views\/ajax":true},"views":{"ajax_path":"\/views\/ajax","ajaxViews":{"views_dom_id:1810a48087848761137c23459a3b3540":{"view_name":"news_feed_home","view_display_id":"news_feed_pane","view_args":"","view_path":"homepage","view_base_path":null,"view_dom_id":"1810a48087848761137c23459a3b3540","pager_element":0},"views_dom_id:4aa4c90a9b0fcad21e2ed5a6f6fc6b90":{"view_name":"testimonial","view_display_id":"testimonial_pane","view_args":"","view_path":"homepage","view_base_path":null,"view_dom_id":"4aa4c90a9b0fcad21e2ed5a6f6fc6b90","pager_element":0}}}});</script>

</head>
<body class="html front not-logged-in page-homepage section-homepage">
<div class="body-wrapper-overflow">
<noscript aria-hidden="true"><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KPBB5ZV" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><div class="body-wrapper">
  <div class="menu-black-overlay"></div>
  <div class="close-menu"></div>
  <header>
        <div class="container">
      <nav class="top-navigation">
                          <div class="l-region l-region--header">
    <div id="block-block-6" class="block block--block block--block-6">
        <div class="block__content">
    <script>
$(document).ready(function() {
    if ($(".main-navigation .exist-submenu:eq(4) .exist-submenu-lv2:eq(2)").length) {
        $(".main-navigation .exist-submenu:eq(4) .exist-submenu-lv2:eq(2)").addClass("custom-acad-menu");
    }
    if ($(".main-navigation .exist-submenu:eq(2) .exist-submenu-lv2:eq(2)").length) {
        $(".main-navigation .exist-submenu:eq(2) .exist-submenu-lv2:eq(2)").addClass("custom-sl-menu");
    }
});
</script>
<style type="text/css">@media screen and (min-width: 1025px) {
    header .nav-wrapper .main-navigation>ul>li>.subMenu-wrapper>ul>li .subMenu-lv2>li {
        list-style-type: none;
        margin-bottom: 15px;
        line-height: 17px;
    }
    .custom-acad-menu {
        height: 178px !important;
    }
    .custom-sl-menu {
        height: 270px !important;
    }
}
</style>
  </div>
</div>
<div id="block-search-form" role="search" class="block block--search block--search-form">
        <div class="block__content">
    <form class="search-block-form" action="/" method="post" id="search-block-form" accept-charset="UTF-8"><div><div class="container-inline">
      <h2 class="element-invisible">Search form</h2>
    <div class="form-item form-type-textfield form-item-search-block-form">
  <label class="element-invisible" for="edit-search-block-form--2">Search </label>
 <input title="Enter the terms you wish to search for." class="gl-input form-text" placeholder="Search here" type="text" id="edit-search-block-form--2" name="search_block_form" value="" size="15" maxlength="128" />
</div>
<div class="form-actions form-wrapper" id="edit-actions"><input type="submit" id="edit-submit" name="op" value="Search" class="form-submit" /></div><input type="hidden" name="form_build_id" value="form-n8ubact0Mr8JKSbgpvXSKjmw1U1kjVts9StaeJrqGoo" />
<input type="hidden" name="form_id" value="search_block_form" />
</div>
</div></form>  </div>
</div>
<nav id="block-menu-menu-top-menu" role="navigation" class="block block--menu block--menu-menu-top-menu">
      
  <ul class="menu"><li class="first leaf"><a href="http://www.singaporetech.edu.sg/digitalnewsroom/" title="">News</a></li>
<li class="leaf"><a href="https://sitsingaporetechedu.sharepoint.com/sites/students/" title="">Students</a></li>
<li class="leaf"><a href="/alumni" title="">Alumni</a></li>
<li class="leaf"><a href="http://library.singaporetech.edu.sg" title="SIT Library website">Library</a></li>
<li class="last leaf"><a href="/jobs" title="">Jobs</a></li>
</ul></nav>
  </div>
      </nav>
    </div>
    <div class="nav-wrapper">
      <div class="container psr">
        <div class="row">
          <div class="col-sm-2">
            <div class="row">
              <div class="menu-opener visible-xs"><span></span></div><a href="/" class="logo"><img src="https://www.singaporetech.edu.sg/sites/default/files/logo.png" alt="logo"></a>
            </div>
          </div>
          <div class="col-sm-10 pss">
                                                                                              <nav class="main-navigation">
                  <ul class="no-bullet">
                    <li class="visible-xs menu-mobile-search-form"></li>
                    <li class="visible-xs menu-home"><a href="/">Home</a></li>
                                          <li><a href="#">About</a>
                                                  <div class="subMenu-wrapper">
                            <ul>
                                                                                                                              <li> <a href="#">The University</a>
                                    <ul class="subMenu-lv2">
                                                                                                                        <li>
                                            <a href="/about/presidents-welcome">President's Welcome</a>
                                          </li>
                                                                                                                                                                <li>
                                            <a href="/about/who-we-are">Who We Are</a>
                                          </li>
                                                                                                                                                                <li>
                                            <a href="/about/sit-dna">The SIT-DNA</a>
                                          </li>
                                                                                                                                                                <li>
                                            <a href="http://www.singaporetech.edu.sg/about/overseas-university-partners">Overseas University Partners</a>
                                          </li>
                                                                                                                                                                <li>
                                            <a href="/about/annual-reports">Annual Reports</a>
                                          </li>
                                                                                                                                                                <li>
                                            <a href="https://www.singaporetech.edu.sg/graduation-2020">Graduation 2020/21</a>
                                          </li>
                                                                                                                                                                                                                                                                              </ul>
                                  </li>
                                                                                                                                <li> <a href="#">Our People</a>
                                    <ul class="subMenu-lv2">
                                                                                                                        <li>
                                            <a href="/about/board-trustees">Board of Trustees</a>
                                          </li>
                                                                                                                                                                <li>
                                            <a href="/about/senior-management">Senior Management</a>
                                          </li>
                                                                                                                                                                <li>
                                            <a href="https://www.singaporetech.edu.sg/directory/faculty">Faculty Directory</a>
                                          </li>
                                                                                                                                                                <li>
                                            <a href="https://www.singaporetech.edu.sg/directory/professional-officers">Professional Officers Directory</a>
                                          </li>
                                                                                                                                                                                                                                                                              </ul>
                                  </li>
                                                                                                                                                                                                                      </ul>
                          </div>
                                              </li>
                                          <li><a href="#">Admissions</a>
                                                  <div class="subMenu-wrapper">
                            <ul>
                                                                                                                              <li> <a href="#">Undergraduate</a>
                                    <ul class="subMenu-lv2">
                                                                                                                        <li>
                                            <a href="/applying-to-SIT/admissions-overview">Admissions Overview</a>
                                          </li>
                                                                                                                                                                <li>
                                            <a href="/applying-to-SIT/admission-requirements">Admission Requirements</a>
                                          </li>
                                                                                                                                                                <li>
                                            <a href="https://www.singaporetech.edu.sg/undergrad/financial-aid">Financial Aid </a>
                                          </li>
                                                                                                                                                                <li>
                                            <a href="/applying-to-SIT/health-requirements">Health Requirements</a>
                                          </li>
                                                                                                                                                                <li>
                                            <a href="/admissions/undergrad/matriculation">Matriculation</a>
                                          </li>
                                                                                                                                                                <li>
                                            <a href="/applying-to-SIT/returning-nsmen">Returning NSmen</a>
                                          </li>
                                                                                                                                                                <li>
                                            <a href="/readmissions-transfers-and-deferments">Readmissions, Transfers And Deferments</a>
                                          </li>
                                                                                                                                                                <li>
                                            <a href="https://www.singaporetech.edu.sg/undergrad/tuition-fees">Tuition Fees </a>
                                          </li>
                                                                                                                                                                <li>
                                            <a href="/applying-to-SIT/faqs">FAQs</a>
                                          </li>
                                                                                                                                                                <li>
                                            <a href="/undergrad/scholarships">Scholarships</a>
                                          </li>
                                                                                                                                                                                                                                                                              </ul>
                                  </li>
                                                                                                                                <li> <a href="#">Postgraduate</a>
                                    <ul class="subMenu-lv2">
                                                                                                                        <li>
                                            <a href="https://www.singaporetech.edu.sg/postgrad/admissions-overview">Admissions Overview</a>
                                          </li>
                                                                                                                                                                <li>
                                            <a href="https://www.singaporetech.edu.sg/postgrad/admission-requirements">Admission Requirements</a>
                                          </li>
                                                                                                                                                                <li>
                                            <a href="https://www.singaporetech.edu.sg/postgrad/fees-financial-aid">Fees and Financial Aid</a>
                                          </li>
                                                                                                                                                                <li>
                                            <a href="/admissions/postgrad/matriculation">Matriculation</a>
                                          </li>
                                                                                                                                                                <li>
                                            <a href="https://www.singaporetech.edu.sg/postgrad/engro-scholarship">Scholarships</a>
                                          </li>
                                                                                                                                                                <li>
                                            <a href="https://www.singaporetech.edu.sg/postgrad/FAQs">FAQs</a>
                                          </li>
                                                                                                                                                                                                                                                                              </ul>
                                  </li>
                                                                                                                                                                                                                      </ul>
                          </div>
                                              </li>
                                          <li><a href="#">Academics</a>
                                                  <div class="subMenu-wrapper">
                            <ul>
                                                                                                                              <li> <a href="#">Academic Clusters</a>
                                    <ul class="subMenu-lv2">
                                                                                                                        <li>
                                            <a href="/engineering">Engineering</a>
                                          </li>
                                                                                                                                                                <li>
                                            <a href="/chemical-engineering-and-food-technology">Chemical Engineering and Food Technology</a>
                                          </li>
                                                                                                                                                                <li>
                                            <a href="/infocomm-technology">Infocomm Technology</a>
                                          </li>
                                                                                                                                                                <li>
                                            <a href="/health-and-social-sciences">Health and Social Sciences</a>
                                          </li>
                                                                                                                                                                <li>
                                            <a href="/design-and-specialised-businesses">Design and Specialised Businesses</a>
                                          </li>
                                                                                                                                                                                                                                                                              </ul>
                                  </li>
                                                                                                                                <li> <a href="#">Work-Study</a>
                                    <ul class="subMenu-lv2">
                                                                                                                        <li>
                                            <a href="/industry-global-exposure/integrated-work-study-programme">Integrated Work Study Programme</a>
                                          </li>
                                                                                                                                                                <li>
                                            <a href="https://www.singaporetech.edu.sg/undergraduate/skillsfutureWSDP">SkillsFuture Work-Study Degree</a>
                                          </li>
                                                                                                                                                                <li>
                                            <a href="/industry-global-exposure/industry-induction-and-international-internship-programme">Industry Induction</a>
                                          </li>
                                                                                                                                                                                                                                                                              </ul>
                                  </li>
                                                                                                                                <li> <a href="#">Global Experience</a>
                                    <ul class="subMenu-lv2">
                                                                                                                        <li>
                                            <a href="https://www.singaporetech.edu.sg/industry-global-exposure/global-experience">Overseas Integrated Work Study Programme</a>
                                          </li>
                                                                                                                                                                <li>
                                            <a href="https://www.singaporetech.edu.sg/industry-global-exposure/overseas-exposure#iip">International Internship Programme</a>
                                          </li>
                                                                                                                                                                <li>
                                            <a href="https://www.singaporetech.edu.sg/industry-global-exposure/overseas-exposure#oip">Overseas Immersion Programme</a>
                                          </li>
                                                                                                                                                                <li>
                                            <a href="https://www.singaporetech.edu.sg/industry-global-exposure/overseas-exposure#oep">Overseas Exposure Programme</a>
                                          </li>
                                                                                                                                                                <li>
                                            <a href="https://www.singaporetech.edu.sg/industry-global-exposure/global-experience#sep">Student Exchange Programme</a>
                                          </li>
                                                                                                                                                                                                                                                                              </ul>
                                  </li>
                                                                                                                                <li> <a href="#">Academic Centres</a>
                                    <ul class="subMenu-lv2">
                                                                                                                        <li>
                                            <a href="/undergraduate-studies/communication-skills">Centre for Communication Skills</a>
                                          </li>
                                                                                                                                                                                                                                                                              </ul>
                                  </li>
                                                                                                                                <li> <a href="#">Continuing Education</a>
                                    <ul class="subMenu-lv2">
                                                                                                                        <li>
                                            <a href="https://sitlearn.singaporetech.edu.sg/">SITLEARN</a>
                                          </li>
                                                                                                                                                                <li>
                                            <a href="https://sitlearn.singaporetech.edu.sg/modular-certification-courses/">Certification Courses</a>
                                          </li>
                                                                                                                                                                                                                                                                              </ul>
                                  </li>
                                                                                                                                <li> <a href="#">Research</a>
                                    <ul class="subMenu-lv2">
                                                                                                                        <li>
                                            <a href="/research/institutional-review-board">Institutional Review Board</a>
                                          </li>
                                                                                                                                                                <li>
                                            <a href="http://libguides.singaporetech.edu.sg/library">Library</a>
                                          </li>
                                                                                                                                                                                                                                                                              </ul>
                                  </li>
                                                                                                                                                                                                                      </ul>
                          </div>
                                              </li>
                                          <li><a href="#">Industry+Community</a>
                                                  <div class="subMenu-wrapper">
                            <ul>
                                                                                                                              <li> <a href="#">Collaborate</a>
                                    <ul class="subMenu-lv2">
                                                                                                                        <li>
                                            <a href="https://www.singaporetech.edu.sg/collaborate/partnering-sit">Partner SIT</a>
                                          </li>
                                                                                                                                                                <li>
                                            <a href="https://www.singaporetech.edu.sg/collaborate/applied-research-innovation-resource">Applied Research & Innovation Resource</a>
                                          </li>
                                                                                                                                                                <li>
                                            <a href="https://www.singaporetech.edu.sg/collaborate/industry-labs">Industry Labs</a>
                                          </li>
                                                                                                                                                                <li>
                                            <a href="https://www.singaporetech.edu.sg/collaborate/gosecure">GoSecure</a>
                                          </li>
                                                                                                                                                                <li>
                                            <a href="https://www.singaporetech.edu.sg/collaborate/skillscraft">SkillsCraft</a>
                                          </li>
                                                                                                                                                                <li>
                                            <a href="https://www.singaporetech.edu.sg/skillsfuture-work-study-degree">SkillsFuture Work-Study Degree</a>
                                          </li>
                                                                                                                                                                                                                                                                              </ul>
                                  </li>
                                                                                                                                <li> <a href="#">Innovate</a>
                                    <ul class="subMenu-lv2">
                                                                                                                        <li>
                                            <a href="https://www.singaporetech.edu.sg/innovate/accounting-technology-innovation-centre">Accounting Technology & Innovation Centre</a>
                                          </li>
                                                                                                                                                                <li>
                                            <a href="https://www.singaporetech.edu.sg/CHeSRI">Centre for Health Sciences Research & Innovation</a>
                                          </li>
                                                                                                                                                                <li>
                                            <a href="https://www.singaporetech.edu.sg/innovate/energy-efficiency-technology-centre">Energy Efficiency Technology Centre</a>
                                          </li>
                                                                                                                                                                <li>
                                            <a href="http://www.singaporetech.edu.sg/innovate/lean-transformation-innovation-centre">Lean Transformation Innovation Centre</a>
                                          </li>
                                                                                                                                                                <li>
                                            <a href="https://www.singaporetech.edu.sg/NACE">National Centre of Excellence for Workplace Learning</a>
                                          </li>
                                                                                                                                                                <li>
                                            <a href="https://www.singaporetech.edu.sg/clasic">Community Leadership and Social Innovation Centre</a>
                                          </li>
                                                                                                                                                                                                                                                                              </ul>
                                  </li>
                                                                                                                                <li> <a href="#">Work Ready Talents</a>
                                    <ul class="subMenu-lv2">
                                                                                                                        <li>
                                            <a href="/work-ready/profiling-your-employer-brand">Profile Your Employer Brand</a>
                                          </li>
                                                                                                                                                                <li>
                                            <a href="/work-ready/talent-pipelining">Talent Pipelining</a>
                                          </li>
                                                                                                                                                                <li>
                                            <a href="/work-ready/employ-sit-graduates">Employ SIT Graduates</a>
                                          </li>
                                                                                                                                                                                                                                                                              </ul>
                                  </li>
                                                                                                                                                                                                                      </ul>
                          </div>
                                              </li>
                                          <li><a href="#">Life@SIT</a>
                                                  <div class="subMenu-wrapper">
                            <ul>
                                                                                                                              <li> <a href="#">Campus Engagements</a>
                                    <ul class="subMenu-lv2">
                                                                                                                        <li>
                                            <a href="https://www.singaporetech.edu.sg/life-sit/campus-engagements">Freshmen Orientation</a>
                                          </li>
                                                                                                                                                                <li>
                                            <a href="https://www.singaporetech.edu.sg/life-sit/campus-engagements#day-zero">Day Zero</a>
                                          </li>
                                                                                                                                                                <li>
                                            <a href="https://www.singaporetech.edu.sg/life-sit/campus-engagements#club-fair">Club Fair</a>
                                          </li>
                                                                                                                                                                <li>
                                            <a href="https://www.singaporetech.edu.sg/life-sit/campus-engagements#inter-cluster-games">Inter-Cluster Games</a>
                                          </li>
                                                                                                                                                                                                                                                                              </ul>
                                  </li>
                                                                                                                                <li> <a href="#">Career Readiness</a>
                                    <ul class="subMenu-lv2">
                                                                                                                        <li>
                                            <a href="https://www.singaporetech.edu.sg/career-ready">Get Career-Ready</a>
                                          </li>
                                                                                                                                                                <li>
                                            <a href="https://www.singaporetech.edu.sg/gearing-for-iwsp">Gear up for IWSP</a>
                                          </li>
                                                                                                                                                                                                                                                                              </ul>
                                  </li>
                                                                                                                                <li> <a href="#">Student Leadership</a>
                                    <ul class="subMenu-lv2">
                                                                                                                        <li>
                                            <a href="https://www.singaporetech.edu.sg/life-sit/student-leadership">Leadership</a>
                                          </li>
                                                                                                                                                                <li>
                                            <a href="https://www.singaporetech.edu.sg/life-sit/student-leadership#global-citizenship">Global Citizenship</a>
                                          </li>
                                                                                                                                                                                                                                                                              </ul>
                                  </li>
                                                                                                                                <li> <a href="#">Student Support</a>
                                    <ul class="subMenu-lv2">
                                                                                                                        <li>
                                            <a href="https://www.singaporetech.edu.sg/life-sit/student-support">Counselling Service</a>
                                          </li>
                                                                                                                                                                <li>
                                            <a href="https://www.singaporetech.edu.sg/life-sit/student-support#accessibility-support">Accessibility Support</a>
                                          </li>
                                                                                                                                                                <li>
                                            <a href="https://www.singaporetech.edu.sg/life-sit/student-support#student-service-centre">Student Service Centre</a>
                                          </li>
                                                                                                                                                                <li>
                                            <a href="https://www.singaporetech.edu.sg/life-sit/student-support#diversity-inclusion">Diversity & Inclusion</a>
                                          </li>
                                                                                                                                                                                                                                                                              </ul>
                                  </li>
                                                                                                                                <li> <a href="#">Student Development</a>
                                    <ul class="subMenu-lv2">
                                                                                                                        <li>
                                            <a href="https://www.singaporetech.edu.sg/life-sit/student-development">Student Management Committees</a>
                                          </li>
                                                                                                                                                                <li>
                                            <a href="https://www.singaporetech.edu.sg/life-sit/student-development#arts-culture">Arts & Culture</a>
                                          </li>
                                                                                                                                                                <li>
                                            <a href="https://www.singaporetech.edu.sg/life-sit/student-development#special-interest">Special Interest</a>
                                          </li>
                                                                                                                                                                <li>
                                            <a href="https://www.singaporetech.edu.sg/life-sit/student-development#sports-martial-arts">Sports & Martial Arts</a>
                                          </li>
                                                                                                                                                                <li>
                                            <a href="https://www.singaporetech.edu.sg/life-sit/student-development#varsity-teams">Varsity Teams</a>
                                          </li>
                                                                                                                                                                <li>
                                            <a href="https://www.singaporetech.edu.sg/life-sit/student-development#service-learning">Service Learning</a>
                                          </li>
                                                                                                                                                                                                                                                                              </ul>
                                  </li>
                                                                                                                                                                                                                      </ul>
                          </div>
                                              </li>
                                          <li><a href="#">Connect</a>
                                                  <div class="subMenu-wrapper">
                            <ul>
                                                                                                                              <li> <a href="#">Hang Out With Us</a>
                                    <ul class="subMenu-lv2">
                                                                                                                        <li>
                                            <a href="/locate-us">Locate Us</a>
                                          </li>
                                                                                                                                                                                                                                                                              </ul>
                                  </li>
                                                                                                                                <li> <a href="#">Giving</a>
                                    <ul class="subMenu-lv2">
                                                                                                                        <li>
                                            <a href="/giving-sit">Why Give?</a>
                                          </li>
                                                                                                                                                                <li>
                                            <a href="/student-relief-fund">Student Relief Fund @ SIT (COVID-19)</a>
                                          </li>
                                                                                                                                                                                                                                                                              </ul>
                                  </li>
                                                                                                                                <li> <a href="#">Stay In Touch</a>
                                    <ul class="subMenu-lv2">
                                                                                                                        <li>
                                            <a href="/office-directory">Office Directory</a>
                                          </li>
                                                                                                                                                                <li>
                                            <a href="/feedback-form">Feedback</a>
                                          </li>
                                                                                                                                                                                                                                                                              </ul>
                                  </li>
                                                                                                                                                                                                                      </ul>
                          </div>
                                              </li>
                                      </ul>
                </nav>
                                    </div>
        </div>
      </div>
    </div>
  </header>
</div>
<div class="body-wrapper-content">
    
  <div class="container">
          </div>
  <div class="l-main">
    <section>
    <a id="main-content"></a>
              <h2 class="page-title">Home</h2>
            <div class="panel-display panel-1col clearfix" >
  <div class="panel-panel panel-col">
    <div><div class="panel-pane pane-views-panes pane-promotion-promotion-pane main-carousel">
            <div class="view view-promotion view-id-promotion view-display-id-promotion_pane view-dom-id-70d6074772ceee4ea40dc9cdc4ab5b99">
        
  
  
      <div class="view-content">
      <div class="slick-wrapper slick-wrapper--asnavfor">      <div id="slick-views-promotion-1" dir="ltr" class="slick slick--view--promotion slick--view--promotion--promotion-pane slick--skin--classic slick--optionset--promotion-main slick--for slick--display--main">
      <div class="slick__slider" id="slick-views-promotion-1-slider" data-slick="{&quot;mobileFirst&quot;:true,&quot;asNavFor&quot;:&quot;#slick-views-promotion-1-thumbnail-slider&quot;,&quot;adaptiveHeight&quot;:true,&quot;autoplay&quot;:true,&quot;autoplaySpeed&quot;:6000,&quot;dots&quot;:true,&quot;lazyLoad&quot;:&quot;progressive&quot;,&quot;swipeToSlide&quot;:true,&quot;edgeFriction&quot;:0.69999999999999996,&quot;touchMove&quot;:false,&quot;cssEase&quot;:&quot;cubic-bezier(0.645, 0.045, 0.355, 1.000)&quot;,&quot;easing&quot;:&quot;easeInOutCubic&quot;}">
  
          <div class="slick__slide slide slide--0">      <div class="slide__content">                        
                      <div class="slide__caption">
          
                      
            
            
                          <div class="slide__description"><div class="promotion-overlay">

<a href="https://www.singaporetech.edu.sg/openhouse" target="_blank" class="promotion-image-external-link">https://www.singaporetech.edu.sg/openhouse</a>
</div><div class="promotion-slide-image-container">
  
<picture>
  <!--\[if IE 9\]><video style="display: none;"><!\[endif\]-->
  <source media="(orientation: portrait)" srcset="https://www.singaporetech.edu.sg/sites/default/files/promotions/openhouse-20201-mobile.jpg 1533w, https://www.singaporetech.edu.sg/sites/default/files/promotions/openhouse-20201-desktop.jpg 1534w" sizes="100vw">
  <source media="(orientation: landscape)" srcset="https://www.singaporetech.edu.sg/sites/default/files/promotions/openhouse-20201-desktop.jpg 576w, https://www.singaporetech.edu.sg/sites/default/files/openhouse-20201-desktop.jpg 768w" sizes="100vw">
  <!--\[if IE 9\]></video><!\[endif\]-->
  <img src="https://www.singaporetech.edu.sg/sites/default/files/promotions/openhouse-20201-desktop.jpg">
</picture>
</div></div>
            
            
                              </div>
              
    </div>  </div>          <div class="slick__slide slide slide--1">      <div class="slide__content">                        
                      <div class="slide__caption">
          
                      
            
            
                          <div class="slide__description"><div class="promotion-overlay">
  <div class="promotion-title"><span>Going Beyond The Classroom</span></div>
  <div class="promotion-subtitle"><span>Do you have what it takes?</div>
  <div class="button-watch-now"><span>WATCH NOW</span></div>

</div><div class="promotion-slide-video-desktop-container hidden">
  <video class="media-promotion-teaser-video" muted loop playsinline preload="none"><source type="video/mp4" src="https://www.singaporetech.edu.sg/sites/default/files/6s_SIT_Campus_Life.mp4"></video>
</div><div class="promotion-slide-image-container">
  
<picture>
  <!--\[if IE 9\]><video style="display: none;"><!\[endif\]-->
  <source media="(orientation: portrait)" srcset="https://www.singaporetech.edu.sg/sites/default/files/promotions/OHbanner_vertical1.jpg 1533w, https://www.singaporetech.edu.sg/sites/default/files/promotions/1155%20x%20480_0.jpg 1534w" sizes="100vw">
  <source media="(orientation: landscape)" srcset="https://www.singaporetech.edu.sg/sites/default/files/promotions/1155%20x%20480_0.jpg 576w, https://www.singaporetech.edu.sg/sites/default/files/promotions/OHbanner_vertical1.jpg 768w" sizes="100vw">
  <!--\[if IE 9\]></video><!\[endif\]-->
  <img src="https://www.singaporetech.edu.sg/sites/default/files/promotions/1155%20x%20480_0.jpg">
</picture>
</div><div class="promotion-slide-main-video-container hidden"><video class="media-promotion-main-video" playsinline controls controlsList="nodownload" preload="none"><source type="video/mp4" src="https://player.vimeo.com/external/388906903.hd.mp4?s=0859ca1f9ef592e63a94547ed8cb4a15d7600f37&amp;profile_id=175"></video></div></div>
            
            
                              </div>
              
    </div>  </div>    
      </div>
    <nav class="slick__arrow">
      <button type="button" data-role="none" class="slick-prev" aria-label="Previous" tabindex="0">Previous</button>
            <button type="button" data-role="none" class="slick-next" aria-label="Next" tabindex="0">Next</button>
    </nav>
  </div>
      <div id="slick-views-promotion-1-thumbnail" dir="ltr" class="slick slick--view--promotion slick--view--promotion--promotion-pane slick--less slick--skin--asnavfor slick--optionset--promotion-thumbnail-nav slick--nav slick--display--thumbnail">
      <div class="slick__slider" id="slick-views-promotion-1-thumbnail-slider" data-slick="{&quot;mobileFirst&quot;:true,&quot;asNavFor&quot;:&quot;#slick-views-promotion-1-slider&quot;,&quot;adaptiveHeight&quot;:true,&quot;arrows&quot;:false,&quot;draggable&quot;:false,&quot;focusOnSelect&quot;:true,&quot;infinite&quot;:false,&quot;lazyLoad&quot;:&quot;progressive&quot;,&quot;slidesPerRow&quot;:3,&quot;slidesToShow&quot;:3,&quot;swipe&quot;:false,&quot;edgeFriction&quot;:0.69999999999999996,&quot;touchMove&quot;:false,&quot;useCSS&quot;:false,&quot;useTransform&quot;:false,&quot;waitForAnimate&quot;:false}">
  
          <div class="slick__slide slide slide--0">      <img typeof="foaf:Image" src="https://www.singaporetech.edu.sg/sites/default/files/promotions/openhouse-20201-thumbnail.jpg" width="264" height="110" alt="" />          <div class="slide__caption">Open House 2021</div>
    
  </div>          <div class="slick__slide slide slide--1">      <img typeof="foaf:Image" src="https://www.singaporetech.edu.sg/sites/default/files/promotions/1155%20x%20480_1.jpg" width="264" height="110" alt="" />          <div class="slide__caption">Going Beyond The Classroom</div>
    
  </div>    
      </div>
    <nav class="slick__arrow">
      <button type="button" data-role="none" class="slick-prev" aria-label="Previous" tabindex="0">Previous</button>
            <button type="button" data-role="none" class="slick-next" aria-label="Next" tabindex="0">Next</button>
    </nav>
  </div>
  </div>    </div>
  
  
  
  
  
  
</div>    </div>
<div class="panel-pane pane-views-panes pane-news-feed-home-news-feed-pane news-feeds">
          <h2 class="pane-title">SIT News</h2>
        <div class="view view-news-feed-home view-id-news_feed_home view-display-id-news_feed_pane view-dom-id-1810a48087848761137c23459a3b3540">
        
      <div class="view-filters">
      <form class="ctools-auto-submit-full-form views-exposed-form-news-feed-home-news-feed-pane" action="/" method="get" id="views-exposed-form-news-feed-home-news-feed-pane" accept-charset="UTF-8"><div><div class="views-exposed-form">
  <div class="views-exposed-widgets clearfix">
          <div id="edit-category-wrapper" class="views-exposed-widget views-widget-filter-field_feed_news_category_tid">
                        <div class="views-widget">
          <div id="edit-category" class="form-radios"><div class="form-item form-type-radio form-item-category">
 <input type="radio" id="edit-category-706" name="category" value="706" checked="checked" class="form-radio" />  <label class="option" for="edit-category-706">Features </label>

</div>
<div class="form-item form-type-radio form-item-category">
 <input type="radio" id="edit-category-736" name="category" value="736" class="form-radio" />  <label class="option" for="edit-category-736">Press releases </label>

</div>
<div class="form-item form-type-radio form-item-category">
 <input type="radio" id="edit-category-696" name="category" value="696" class="form-radio" />  <label class="option" for="edit-category-696">In the news </label>

</div>
</div>        </div>
              </div>
                    <div class="views-exposed-widget views-submit-button">
      <input class="ctools-use-ajax ctools-auto-submit-click js-hide form-submit" type="submit" id="edit-submit-news-feed-home" name="" value="Apply" />    </div>
      </div>
</div>
</div></form>    </div>
  
  
      <div class="view-content">
            <div id="slick-views-news-feed-home-2" dir="ltr" class="slick slick--view--news-feed-home slick--view--news-feed-home--news-feed-pane slick--optionset--news-feed slick--for">
      <div class="slick__slider" id="slick-views-news-feed-home-2-slider" data-slick="{&quot;mobileFirst&quot;:true,&quot;adaptiveHeight&quot;:true,&quot;infinite&quot;:false,&quot;slidesPerRow&quot;:3,&quot;edgeFriction&quot;:0.69999999999999996,&quot;touchMove&quot;:false,&quot;cssEase&quot;:&quot;cubic-bezier(0.645, 0.045, 0.355, 1.000)&quot;,&quot;easing&quot;:&quot;easeInOutCubic&quot;,&quot;waitForAnimate&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:576,&quot;settings&quot;:{&quot;infinite&quot;:false,&quot;slidesPerRow&quot;:3,&quot;slidesToShow&quot;:2,&quot;edgeFriction&quot;:0.69999999999999996}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;arrows&quot;:false,&quot;infinite&quot;:false,&quot;slidesPerRow&quot;:3,&quot;slidesToShow&quot;:3,&quot;swipe&quot;:false,&quot;edgeFriction&quot;:0.69999999999999996,&quot;touchMove&quot;:false,&quot;waitForAnimate&quot;:false}}]}">
  
          <div class="slick__slide slide slide--0">      <div class="slide__content">                        
                      <div class="slide__caption">
          
                      
            
            
                          <div class="slide__description"><div class="news-feed-item">
  <div class="feed-image" style="background-image: url('https://presspage-production-content.s3.amazonaws.com/uploads/1559/500_website1.jpg?10000"><a class="news-feed-image-external-link" href="https://www.singaporetech.edu.sg/digitalnewsroom/a-remarkable-voyage-to-fulfil-a-lifelong-ambition/" target="_blank');">A Remarkable Voyage to Fulfil a Lifelong Ambition</a></div>
  <div class="feed-date"><span class="date-display-single" property="dc:date" datatype="xsd:dateTime" content="2020-11-19T17:34:00+08:00">19 Nov 2020</span></div>
  <h3 class="feed-title"><a class="news-feed-external-link" href="https://www.singaporetech.edu.sg/digitalnewsroom/a-remarkable-voyage-to-fulfil-a-lifelong-ambition/" target="_blank">A Remarkable Voyage to Fulfil a Lifelong Ambition</a></h3>
</div></div>
            
            
                              </div>
              
    </div>  </div>          <div class="slick__slide slide slide--1">      <div class="slide__content">                        
                      <div class="slide__caption">
          
                      
            
            
                          <div class="slide__description"><div class="news-feed-item">
  <div class="feed-image" style="background-image: url('https://presspage-production-content.s3.amazonaws.com/uploads/1559/500_pexels-pixabay-2092241.jpg?10000"><a class="news-feed-image-external-link" href="https://www.singaporetech.edu.sg/digitalnewsroom/acctech-centre-helping-smes-innovate-and-digitalise-accounting-processes/" target="_blank');">AccTech Centre: Helping SMEs Innovate and Digitalise Accounting Processes</a></div>
  <div class="feed-date"><span class="date-display-single" property="dc:date" datatype="xsd:dateTime" content="2020-11-10T09:36:00+08:00">10 Nov 2020</span></div>
  <h3 class="feed-title"><a class="news-feed-external-link" href="https://www.singaporetech.edu.sg/digitalnewsroom/acctech-centre-helping-smes-innovate-and-digitalise-accounting-processes/" target="_blank">AccTech Centre: Helping SMEs Innovate and Digitalise Accounting Processes</a></h3>
</div></div>
            
            
                              </div>
              
    </div>  </div>          <div class="slick__slide slide slide--2">      <div class="slide__content">                        
                      <div class="slide__caption">
          
                      
            
            
                          <div class="slide__description"><div class="news-feed-item">
  <div class="feed-image" style="background-image: url('https://presspage-production-content.s3.amazonaws.com/uploads/1559/500_1024px-main-control-room-at-esa039s-space-operations-centre-esa11252261.jpeg?10000"><a class="news-feed-image-external-link" href="https://www.singaporetech.edu.sg/digitalnewsroom/preparing-the-next-generation-of-cybersecurity-specialists/" target="_blank');">Preparing the Next Generation of Cybersecurity Specialists</a></div>
  <div class="feed-date"><span class="date-display-single" property="dc:date" datatype="xsd:dateTime" content="2020-11-04T12:00:00+08:00">04 Nov 2020</span></div>
  <h3 class="feed-title"><a class="news-feed-external-link" href="https://www.singaporetech.edu.sg/digitalnewsroom/preparing-the-next-generation-of-cybersecurity-specialists/" target="_blank">Preparing the Next Generation of Cybersecurity Specialists</a></h3>
</div></div>
            
            
                              </div>
              
    </div>  </div>    
      </div>
    <nav class="slick__arrow">
      <button type="button" data-role="none" class="slick-prev" aria-label="Previous" tabindex="0">Previous</button>
            <button type="button" data-role="none" class="slick-next" aria-label="Next" tabindex="0">Next</button>
    </nav>
  </div>
      </div>
  
  
  
  
  
  
</div>    </div>
<div class="panel-pane pane-views-panes pane-testimonial-testimonial-pane testimonials">
          <h2 class="pane-title">Testimonials</h2>
        <div class="view view-testimonial view-id-testimonial view-display-id-testimonial_pane view-dom-id-4aa4c90a9b0fcad21e2ed5a6f6fc6b90">
        
      <div class="view-filters">
      <form class="ctools-auto-submit-full-form views-exposed-form-testimonial-testimonial-pane" action="/" method="get" id="views-exposed-form-testimonial-testimonial-pane" accept-charset="UTF-8"><div><div class="views-exposed-form">
  <div class="views-exposed-widgets clearfix">
          <div id="edit-testimonial-type-wrapper" class="views-exposed-widget views-widget-filter-field_testimonial_source_value">
                        <div class="views-widget">
          <div id="edit-testimonial-type" class="form-radios"><div class="form-item form-type-radio form-item-testimonial-type">
 <input type="radio" id="edit-testimonial-type-employers" name="testimonial-type" value="Employers" checked="checked" class="form-radio" />  <label class="option" for="edit-testimonial-type-employers">Employers </label>

</div>
<div class="form-item form-type-radio form-item-testimonial-type">
 <input type="radio" id="edit-testimonial-type-our-students" name="testimonial-type" value="Our students" class="form-radio" />  <label class="option" for="edit-testimonial-type-our-students">Our students </label>

</div>
</div>        </div>
              </div>
                    <div class="views-exposed-widget views-submit-button">
      <input class="ctools-use-ajax ctools-auto-submit-click js-hide form-submit" type="submit" id="edit-submit-testimonial" name="" value="Apply" />    </div>
      </div>
</div>
</div></form>    </div>
  
  
      <div class="view-content">
      <div class="slick-wrapper slick-wrapper--asnavfor">      <div id="slick-views-testimonial-3" dir="ltr" class="slick slick--view--testimonial slick--view--testimonial--testimonial-pane slick--skin--classic slick--optionset--testimonial-main slick--for slick--display--main">
      <div class="slick__slider" id="slick-views-testimonial-3-slider" data-slick="{&quot;mobileFirst&quot;:true,&quot;asNavFor&quot;:&quot;#slick-views-testimonial-3-thumbnail-slider&quot;,&quot;adaptiveHeight&quot;:true,&quot;arrows&quot;:false,&quot;swipeToSlide&quot;:true,&quot;edgeFriction&quot;:0.69999999999999996,&quot;cssEase&quot;:&quot;cubic-bezier(0.645, 0.045, 0.355, 1.000)&quot;,&quot;easing&quot;:&quot;easeInOutCubic&quot;,&quot;waitForAnimate&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:767,&quot;settings&quot;:{&quot;adaptiveHeight&quot;:true,&quot;arrows&quot;:false,&quot;infinite&quot;:false,&quot;swipeToSlide&quot;:true,&quot;edgeFriction&quot;:0.69999999999999996,&quot;cssEase&quot;:&quot;cubic-bezier(0.645, 0.045, 0.355, 1.000)&quot;,&quot;easing&quot;:&quot;easeInOutCubic&quot;}}]}">
  
          <div class="slick__slide slide slide--0">      <div class="slide__content">                        
                      <div class="slide__caption">
          
                      
            
            
                          <div class="slide__description"><div class="testimonial__wrapper">
  <div class="testimonial__content">The programme has been great for the students. It gives them the opportunity to learn and grow and is something I would strongly recommend to anyone.</div>
  <div class="testimonial__full-name">Carrie de Souza</div>
  <div class="testimonial__designation">Conference Manager<br />
Koelnmesse Pte Ltd<br />
</div>
</div></div>
            
            
                              </div>
              
    </div>  </div>          <div class="slick__slide slide slide--1">      <div class="slide__content">                        
                      <div class="slide__caption">
          
                      
            
            
                          <div class="slide__description"><div class="testimonial__wrapper">
  <div class="testimonial__content">SIT students are among the most motivated and qualified that I have come across - a combination of dedicated students who are eager to learn and able to integrate into the workplace.</div>
  <div class="testimonial__full-name">Chee Thong Gan</div>
  <div class="testimonial__designation">Senior Director<br />
Allied Health, Clinical and Community Operations JurongHealth Campus<br />
National University Health System Group<br />
</div>
</div></div>
            
            
                              </div>
              
    </div>  </div>          <div class="slick__slide slide slide--2">      <div class="slide__content">                        
                      <div class="slide__caption">
          
                      
            
            
                          <div class="slide__description"><div class="testimonial__wrapper">
  <div class="testimonial__content">SIT’s DNA educating ‘thinking tinkerers’ sits well with the Infocomm Technology degree programmes. Their vision imbues SIT students with the right perspectives before they graduate. </div>
  <div class="testimonial__full-name">Aloysius Cheang</div>
  <div class="testimonial__designation">Chief Executive Officer <br />
iSyncGroup Technology Co. Ltd<br />
</div>
</div></div>
            
            
                              </div>
              
    </div>  </div>          <div class="slick__slide slide slide--3">      <div class="slide__content">                        
                      <div class="slide__caption">
          
                      
            
            
                          <div class="slide__description"><div class="testimonial__wrapper">
  <div class="testimonial__content">The students who have worked with us for their IWSP were of very high caliber. They possess excellent work attitude, demonstrated initiative and became an integral part of the company.</div>
  <div class="testimonial__full-name">Edmond Looi</div>
  <div class="testimonial__designation">Business Development Director<br />
DVUCA Pte Ltd<br />
</div>
</div></div>
            
            
                              </div>
              
    </div>  </div>          <div class="slick__slide slide slide--4">      <div class="slide__content">                        
                      <div class="slide__caption">
          
                      
            
            
                          <div class="slide__description"><div class="testimonial__wrapper">
  <div class="testimonial__content">Excellent academia! They are hands-on, insightful and equipped with relevant knowledge that helped make a difference in finding solutions to our problem statements.</div>
  <div class="testimonial__full-name">John Cheng</div>
  <div class="testimonial__designation">Director, Innovate 360 Food Incubator<br />
Cheng Yew Heng Candy Factory Pte Ltd<br />
</div>
</div></div>
            
            
                              </div>
              
    </div>  </div>    
      </div>
    <nav class="slick__arrow">
      <button type="button" data-role="none" class="slick-prev" aria-label="Previous" tabindex="0">Previous</button>
            <button type="button" data-role="none" class="slick-next" aria-label="Next" tabindex="0">Next</button>
    </nav>
  </div>
      <div id="slick-views-testimonial-3-thumbnail" dir="ltr" class="slick slick--view--testimonial slick--view--testimonial--testimonial-pane slick--skin--asnavfor slick--optionset--testimonial-thumbnail-nav slick--nav slick--display--thumbnail">
      <div class="slick__slider" id="slick-views-testimonial-3-thumbnail-slider" data-slick="{&quot;mobileFirst&quot;:true,&quot;asNavFor&quot;:&quot;#slick-views-testimonial-3-slider&quot;,&quot;adaptiveHeight&quot;:true,&quot;arrows&quot;:false,&quot;centerMode&quot;:true,&quot;focusOnSelect&quot;:true,&quot;lazyLoad&quot;:&quot;progressive&quot;,&quot;slidesPerRow&quot;:10,&quot;slidesToShow&quot;:3,&quot;swipeToSlide&quot;:true,&quot;edgeFriction&quot;:0.69999999999999996,&quot;cssEase&quot;:&quot;cubic-bezier(0.645, 0.045, 0.355, 1.000)&quot;,&quot;useTransform&quot;:false,&quot;variableWidth&quot;:true,&quot;responsive&quot;:[{&quot;breakpoint&quot;:767,&quot;settings&quot;:{&quot;arrows&quot;:false,&quot;infinite&quot;:false,&quot;slidesPerRow&quot;:5,&quot;slidesToShow&quot;:5,&quot;swipeToSlide&quot;:true,&quot;edgeFriction&quot;:0.69999999999999996,&quot;cssEase&quot;:&quot;cubic-bezier(0.645, 0.045, 0.355, 1.000)&quot;,&quot;useTransform&quot;:false,&quot;easing&quot;:&quot;easeInOutCubic&quot;,&quot;variableWidth&quot;:true}}]}">
  
          <div class="slick__slide slide slide--0">      <img typeof="foaf:Image" src="https://www.singaporetech.edu.sg/sites/default/files/testimonials/profile-ms-carrie-de-souza%402x.jpg" width="160" height="160" alt="" />    
  </div>          <div class="slick__slide slide slide--1">      <img typeof="foaf:Image" src="https://www.singaporetech.edu.sg/sites/default/files/testimonials/profile-ms-chee-thong-gan%402x.jpg" width="160" height="160" alt="" />    
  </div>          <div class="slick__slide slide slide--2">      <img typeof="foaf:Image" src="https://www.singaporetech.edu.sg/sites/default/files/testimonials/profile-aloysius-cheang%402x.jpg" width="160" height="160" alt="" />    
  </div>          <div class="slick__slide slide slide--3">      <img typeof="foaf:Image" src="https://www.singaporetech.edu.sg/sites/default/files/testimonials/profile-mr-edmond-looi%402x.jpg" width="160" height="160" alt="" />    
  </div>          <div class="slick__slide slide slide--4">      <img typeof="foaf:Image" src="https://www.singaporetech.edu.sg/sites/default/files/testimonials/profile-mr-john-cheng%402x.jpg" width="160" height="160" alt="" />    
  </div>    
      </div>
    <nav class="slick__arrow">
      <button type="button" data-role="none" class="slick-prev" aria-label="Previous" tabindex="0">Previous</button>
            <button type="button" data-role="none" class="slick-next" aria-label="Next" tabindex="0">Next</button>
    </nav>
  </div>
  </div>    </div>
  
  
  
  
  
  
</div>    </div>
<div class="panel-pane pane-panels-mini pane-applied-learning applied-learning">
            <div class="panel-display panel-2col clearfix" id="mini-panel-applied_learning">
  <div class="panel-panel panel-col-first">
    <div class="inside"><div class="panel-pane pane-custom pane-1">
          <h2 class="pane-title">Applied Learning At SIT</h2>
        <p>An applied education with SIT equips you with&nbsp;industry-relevant skills&nbsp;for a specific profession. Our specialised degrees programmes provide the opportunity to interact and work with industry professionals.&nbsp;Hear what our SITizens have to say&nbsp;about their experience.</p>
    </div>
</div>
  </div>

  <div class="panel-panel panel-col-last">
    <div class="inside"><div class="panel-pane pane-custom pane-2">
            <div class="slick-slide slick-current" style="position: relative; height: 18em; overflow: hidden; display: block; float: none;">
<div class="promotion-overlay">
<div class="button-watch-now" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; z-index: 5; color: transparent">&nbsp;</div>
</div>

<div class="promotion-slide-video-desktop-container">
<video autoplay="" class="media-promotion-teaser-video" loop="" muted="" playsinline="" preload="auto" style="height: 100%; position: absolute; top: 50%; left: 50%; transform: translate(-50%,-50%); width: auto;"><source src="https://www.singaporetech.edu.sg/sites/default/files/AL_Teaser.mp4" type="video/mp4" /></video>
</div>

<div class="promotion-slide-main-video-container hidden">
<video class="media-promotion-main-video" controls="" controlslist="nodownload" playsinline="" preload="none"><source src="https://player.vimeo.com/external/348771767.hd.mp4?s=31821d964fecd50c2cd7d405b6f68a7e68b9f9b5&amp;profile_id=175" type="video/mp4" /></video>
</div>
</div>
    </div>
</div>
  </div>
</div>
    </div>
<div class="panel-pane pane-custom pane-3 instagram-feeds">
          <h2 class="pane-title">Social Media Feeds</h2>
        <style type="text/css">.crt-widget .crt-load-more {
border: none;
text-transform: none;
font-weight: normal;
}
</style>
<!-- Place <div> tag where you want the feed to appear -->
<div id="curator-feed"><a class="crt-logo crt-tag" href="https://curator.io" target="_blank">&nbsp;</a></div>
<!-- The Javascript can be moved to the end of the html page before the </body> tag --><script type="text/javascript">
/* curator-feed */
(function(){
var i, e, d = document, s = "script";i = d.createElement("script");i.async = 1;
i.src = "https://cdn.curator.io/published/b338f672-f936-452a-99d9-1680370d2146.js";
e = d.getElementsByTagName(s)[0];e.parentNode.insertBefore(i, e);
})();
</script>    </div>
</div>
  </div>
</div>
<div id="block-block-11" class="block block--block block--block-11">
        <div class="block__content">
    <script> 
$(document).ready(function() {
	if($(".academics-tpl .study-trip-section").length) 
	{
		if($(".academics-tpl .study-trip-section h2").is(':empty'))
		{
			$(".academics-tpl .study-trip-section").hide();
		}
	}
});
</script>  </div>
</div>
  </section>
  </div>
</div>
<footer>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">

        <div class="quick-links visible-xs">
          <h2>Quick Links</h2>
          <div class="accordion-wrapper">
                                                              <div class="accordion">
                                          <div class="accordion-title"><span style="text-transform: uppercase;">Staff</span></div>
                                        <div class="accordion-content">
                                                                                                                                  <a href="https://www.outlook.com/sit.singaporetech.edu.sg" target="_blank">Webmail</a>
                                                                                                                                                                  <a href="https://login.microsoftonline.com/login.srf?wa=wsignin1%2E0&rpsnv=4&ct=1468208248&rver=6%2E1%2E6206%2E0&wp=MBI&wreply=https%3A%2F%2Fsitsingaporetechedu%2Esharepoint%2Ecom%2F_forms%2Fdefault%2Easpx%3Fapr%3D1&lc=1033&id=500046&client-request-id=4ca38e9d-f0d" target="_blank">SITNET</a>
                                                                                                                                                                  <a href="http://www.singaporetech.edu.sg/directory/user" target="_blank">Web Directory</a>
                                                                                                                                                                                                                            </div>
                  </div>
                                                  <div class="accordion">
                                          <div class="accordion-title"><span style="text-transform: uppercase;">ALUMNI</span></div>
                                        <div class="accordion-content">
                                                                                                                                  <a href="https://sit.au1.qualtrics.com/jfe/form/SV_87mxwapXo1mChRH" target="_blank">Update Your Particulars</a>
                                                                                                                                                                  <a href="https://www.outlook.com/sit.singaporetech.edu.sg" target="_blank">Webmail</a>
                                                                                                                                                                                                                            </div>
                  </div>
                                                  <div class="accordion">
                                          <div class="accordion-title"><span style="text-transform: uppercase;">CONTACTS</span></div>
                                        <div class="accordion-content">
                                                                                                                                  <a href="https://www.singaporetech.edu.sg/directory/faculty" target="_blank">Faculty Directory</a>
                                                                                                                                                                  <a href="https://www.singaporetech.edu.sg/directory/professional-officers" target="_blank">Professional Officers Directory</a>
                                                                                                                                                                  <a href="https://www.singaporetech.edu.sg/office-directory" target="_blank">Office Directory</a>
                                                                                                                                                                                                                            </div>
                  </div>
                                                  <div class="accordion">
                                          <div class="accordion-title"><span style="text-transform: uppercase;">STUDENTS</span></div>
                                        <div class="accordion-content">
                                                                                                                                  <a href="https://students.singaporetech.edu.sg/" target="_blank">Student Intranet</a>
                                                                                                                                                                  <a href="https://fs.singaporetech.edu.sg/adfs/ls/?client-request-id=f6379e15-fab3-4dec-8f04-c915d44e2f47&username=&wa=wsignin1.0&wtrealm=urn%3afederation%3aMicrosoftOnline&wctx=estsredirect%3d2%26estsrequest%3drQIIAbNSzyg" target="_blank">Webmail</a>
                                                                                                                                                                  <a href="https://xsite.singaporetech.edu.sg/" target="_blank">xSITe LMS</a>
                                                                                                                                                                  <a href="https://readytalent2.singaporetech.edu.sg/" target="_blank">ReadyTalent Job Portal</a>
                                                                                                                                                                  <a href="https://studentapps.singaporetech.edu.sg/WCOnline/" target="_blank">Communication Helpdesk</a>
                                                                                                                                                                                                                            </div>
                  </div>
                                                  <div class="accordion">
                                          <div class="accordion-title"><span style="text-transform: uppercase;">SUPPLIERS</span></div>
                                        <div class="accordion-content">
                                                                                                                                  <a href="https://www.singaporetech.edu.sg/procurement" target="_blank">Procurement Portal</a>
                                                                                                                                                                                                                            </div>
                  </div>
                                                  <div class="accordion">
                                          <div class="accordion-title"><span style="text-transform: uppercase;">VISITORS</span></div>
                                        <div class="accordion-content">
                                                                                                                                  <a href="https://www.singaporetech.edu.sg/getting_to_sit_dover" target="_blank">SIT@Dover</a>
                                                                                                                                                                  <a href="https://goo.gl/maps/K4ZmYHUfnXU2" target="_blank">SIT@NP Building</a>
                                                                                                                                                                  <a href="https://goo.gl/maps/r834S3TMTjT2" target="_blank">SIT@NYP Building</a>
                                                                                                                                                                  <a href="https://goo.gl/maps/JyBjDJu1F3C2" target="_blank">SIT@RP Building</a>
                                                                                                                                                                  <a href="https://goo.gl/maps/eXvszpJNpCK2" target="_blank">SIT@SP Building</a>
                                                                                                                                                                  <a href="https://goo.gl/maps/5L3jJAADtdo" target="_blank">SIT@TP Building</a>
                                                                                                                                                                                                                            </div>
                  </div>
                                                          </div>
        </div>

        <div class="footer-infomation">
          <div class="col-sm-8 hidden-xs">
            <div class="footer-menu">
              <div class="first-row menu-block-row">
                                    
                    <div class="menu-block eqh">
                                              <p> Staff</p>
                                            <ul>
                                                                                                                                            <li><a href="https://www.outlook.com/sit.singaporetech.edu.sg" target="_blank">Webmail</a></li>
                                                                                                                                                                              <li><a href="https://login.microsoftonline.com/login.srf?wa=wsignin1%2E0&rpsnv=4&ct=1468208248&rver=6%2E1%2E6206%2E0&wp=MBI&wreply=https%3A%2F%2Fsitsingaporetechedu%2Esharepoint%2Ecom%2F_forms%2Fdefault%2Easpx%3Fapr%3D1&lc=1033&id=500046&client-request-id=4ca38e9d-f0d" target="_blank">SITNET</a></li>
                                                                                                                                                                              <li><a href="http://www.singaporetech.edu.sg/directory/user" target="_blank">Web Directory</a></li>
                                                                                                                                                                                                                                              </ul>
                    </div>

                  
                    <div class="menu-block eqh">
                                              <p> ALUMNI</p>
                                            <ul>
                                                                                                                                            <li><a href="https://sit.au1.qualtrics.com/jfe/form/SV_87mxwapXo1mChRH" target="_blank">Update Your Particulars</a></li>
                                                                                                                                                                              <li><a href="https://www.outlook.com/sit.singaporetech.edu.sg" target="_blank">Webmail</a></li>
                                                                                                                                                                                                                                              </ul>
                    </div>

                  
                    <div class="menu-block eqh">
                                              <p> CONTACTS</p>
                                            <ul>
                                                                                                                                            <li><a href="https://www.singaporetech.edu.sg/directory/faculty" target="_blank">Faculty Directory</a></li>
                                                                                                                                                                              <li><a href="https://www.singaporetech.edu.sg/directory/professional-officers" target="_blank">Professional Officers Directory</a></li>
                                                                                                                                                                              <li><a href="https://www.singaporetech.edu.sg/office-directory" target="_blank">Office Directory</a></li>
                                                                                                                                                                                                                                              </ul>
                    </div>

                  
                    <div class="menu-block eqh">
                                              <p> STUDENTS</p>
                                            <ul>
                                                                                                                                            <li><a href="https://students.singaporetech.edu.sg/" target="_blank">Student Intranet</a></li>
                                                                                                                                                                              <li><a href="https://fs.singaporetech.edu.sg/adfs/ls/?client-request-id=f6379e15-fab3-4dec-8f04-c915d44e2f47&username=&wa=wsignin1.0&wtrealm=urn%3afederation%3aMicrosoftOnline&wctx=estsredirect%3d2%26estsrequest%3drQIIAbNSzyg" target="_blank">Webmail</a></li>
                                                                                                                                                                              <li><a href="https://xsite.singaporetech.edu.sg/" target="_blank">xSITe LMS</a></li>
                                                                                                                                                                              <li><a href="https://readytalent2.singaporetech.edu.sg/" target="_blank">ReadyTalent Job Portal</a></li>
                                                                                                                                                                              <li><a href="https://studentapps.singaporetech.edu.sg/WCOnline/" target="_blank">Communication Helpdesk</a></li>
                                                                                                                                                                                                                                              </ul>
                    </div>

                  
                    <div class="menu-block eqh">
                                              <p> SUPPLIERS</p>
                                            <ul>
                                                                                                                                            <li><a href="https://www.singaporetech.edu.sg/procurement" target="_blank">Procurement Portal</a></li>
                                                                                                                                                                                                                                              </ul>
                    </div>

                  
                    <div class="menu-block eqh">
                                              <p> VISITORS</p>
                                            <ul>
                                                                                                                                            <li><a href="https://www.singaporetech.edu.sg/getting_to_sit_dover" target="_blank">SIT@Dover</a></li>
                                                                                                                                                                              <li><a href="https://goo.gl/maps/K4ZmYHUfnXU2" target="_blank">SIT@NP Building</a></li>
                                                                                                                                                                              <li><a href="https://goo.gl/maps/r834S3TMTjT2" target="_blank">SIT@NYP Building</a></li>
                                                                                                                                                                              <li><a href="https://goo.gl/maps/JyBjDJu1F3C2" target="_blank">SIT@RP Building</a></li>
                                                                                                                                                                              <li><a href="https://goo.gl/maps/eXvszpJNpCK2" target="_blank">SIT@SP Building</a></li>
                                                                                                                                                                              <li><a href="https://goo.gl/maps/5L3jJAADtdo" target="_blank">SIT@TP Building</a></li>
                                                                                                                                                                                                                                              </ul>
                    </div>

                  
                    <div class="menu-block eqh">
                                            <ul>
                                              </ul>
                    </div>

                  
                    <div class="menu-block eqh">
                                            <ul>
                                              </ul>
                    </div>

                  
                              </div>
            </div>
          </div>
          <div class="col-sm-4 col-xs-12">
            <div class="footer-info">
              
              <div class="first-row info-block-row hidden-xs">
                <div class="info-title">
                  <h3>SINGAPORE INSTITUTE OF TECHNOLOGY</h3>
                </div>
                <div class="info-content">
                  <div class="col-xs-12">
                    <div class="row">
                      <div class="content-inner address"><span class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span><span>10 Dover Drive Singapore 138683</span></div>
                      <div class="content-inner phone"><a href="callto:+65 6592 1189"><span class="icon"><i class="fa fa-phone" aria-hidden="true"></i></span><span>Tel: +65 6592 1189</span></a></div>
                      <div class="content-inner fax"><a href="callto:+65 6592 1190"><span class="icon"><i class="fa fa-fax" aria-hidden="true"></i></span><span>Fax: +65 6592 1190</span></a></div>
                    </div>
                  </div>
                </div>
              </div>

              

                <div class="second-row info-block-row">
                  <span>Get in touch</span>
                                      <a href="https://www.facebook.com/SingaporeTech/" title="facebook" target="_blank"><i class="fa fa-facebook-square social-icon facebook" aria-hidden="true"></i></a>
                                        <a href="https://www.instagram.com/singaporetech/" title="Instagram" target="_blank"><i class="fa fa-instagram social-icon instagram" aria-hidden="true"></i></a>
                                        <a href="https://www.youtube.com/user/SingaporeTech" title="YouTube" target="_blank"><i class="fa fa-youtube-square social-icon youtube" aria-hidden="true"></i></a>
                                        <a href="https://twitter.com/singaporetech" title="Twitter" target="_blank"><i class="fa fa-twitter-square social-icon twitter" aria-hidden="true"></i></a>
                                        <a href="https://www.linkedin.com/company/singapore-institute-of-technology" title="LinkedIn" target="_blank"><i class="fa fa-linkedin-square social-icon linkedIn" aria-hidden="true"></i></a>
                                    </div>
                          </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12 col-xs-12">
        <div class="copyright">
          <div class="col-md-8 col-sm-6">
            <p>Copyright © 2020 Singapore Institute of Technology.</p>
            <p>All Rights Reserved.</p>
          </div>
        </div>
        <div class="term hidden-xs">
          <div class="col-md-4 col-sm-6">
            <ul>
                                                                                <li><a href="/academic-policies/academic-governance" title="Academic Policies" target="_blank">Academic Policies</a></li>
                                                                                                                                <li><a href="https://www.singaporetech.edu.sg/sites/default/files/SIT%20Brand%20Guide.pdf" title="Brand Guide" target="_blank">Brand Guide</a></li>
                                                                                                                                <li><a href="/privacy-statement" title="Privacy Statement" target="_blank">Privacy Statement</a></li>
                                                                                                                                <li><a href="/terms-use" title="Terms of Use" target="_blank">Terms of Use</a></li>
                                                                                                                                                          </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  </footer>
</div>
<script async type="text/javascript" src="/_Incapsula_Resource?SWJIYLWA=719d34d31c8e3a6e6fffd425f7e032f3&ns=1&cb=1145296476"></script>
</body>

</html>

