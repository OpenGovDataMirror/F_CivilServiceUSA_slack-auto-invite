<!DOCTYPE html>
<html lang="en-us" class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="Content-Security-Policy" content="img-src *; default-src * 'self' gap: ws:; style-src 'self' 'unsafe-inline' https://fonts.googleapis.com https://cdnjs.cloudflare.com; font-src 'self' https://fonts.gstatic.com https://cdnjs.cloudflare.com data:; script-src 'self' 'unsafe-inline' 'unsafe-eval' http://www.google-analytics.com https://www.google-analytics.com https://cdnjs.cloudflare.com;">

        <title>Civil Services - #slack community</title>

        <meta name="description" content="Civil Services is a Team of Volunteers dedicated to making it possible for citizens to be a part of what is happening in their Local, State & Federal Governments.">
        <meta name="keywords" content="Civil, Services, Local, State, Federal, Government, Legislation, Accountability, Action, Information, Elected, Officials, API, Developers" />
        <meta name="author" content="Civil Services">
        <meta name="robots" content="noodp,noydir">
        <meta name="robots" content="index,follow">
        <meta name="coverage" content="worldwide">
        <meta name="cache-control" content="public">
        <meta name="googlebot" content="index,follow">

        <!-- Mobile Metadata -->
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
        <meta name="apple-mobile-web-app-title" content="Civil Services">
        <meta name="application-name" content="Civil Services">

        <!-- Twitter Metadata -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Civil Services - #slack community">
        <meta name="twitter:site" content="@CivilServiceUSA">
        <meta name="twitter:creator" content="@CivilServiceUSA">
        <meta name="twitter:description" content="Civil Services is a Team of Volunteers dedicated to making it possible for citizens to be a part of what is happening in their Local, State & Federal Governments.">
        <meta name="twitter:image" content="https://slack.civil.services/assets/images/app-image.jpg">
        <meta name="twitter:image:alt" content="Civil Services - #slack community">
        <meta name="twitter:domain" content="civil.services">

        <!-- Open Graph Metadata -->
        <meta property="og:locale" content="en_US">
        <meta property="og:type" content="website">
        <meta property="og:title" content="Civil Services - #slack community">
        <meta property="og:url" content="https://slack.civil.services">
        <meta property="og:image" content="https://slack.civil.services/assets/images/app-image.jpg">
        <meta property="og:site_name" content="Civil Services">
        <meta property="og:description" content="Civil Services is a Team of Volunteers dedicated to making it possible for citizens to be a part of what is happening in their Local, State & Federal Governments.">

        <!-- Dublin Core Metadata -->
        <meta name="dc:language" content="en_US">
        <meta name="dc:title" content="Civil Services - #slack community">
        <meta name="dc:source" content="https://slack.civil.services">
        <meta name="dc:description" content="Civil Services is a Team of Volunteers dedicated to making it possible for citizens to be a part of what is happening in their Local, State & Federal Governments.">

        <!-- Structured Metadata -->
        <script type="application/ld+json">
          {
            "@context": "http://schema.org/",
            "@type": "Service",
            "serviceType": "Public Service",
            "provider": {
              "@type": "LocalBusiness",
              "name": "Civil Services",
              "image": "https://slack.civil.services/assets/images/app-image.jpg",
              "address": {
                "@type": "PostalAddress",
                "addressCountry": "US",
                "addressLocality": "St. Petersburg",
                "addressRegion": "FL",
                "postOfficeBoxNumber": "Suite 420",
                "postalCode": "33701",
                "streetAddress": "200 2nd Avenue South"
              },
              "description": "Civil Services is a Team of Volunteers dedicated to making it possible for citizens to be a part of what is happening in their Local, State & Federal Governments.",
              "name": "Civil Services",
              "telephone": "N/A",
              "priceRange": "0",
              "geo": {
                "@type": "GeoCoordinates",
                "latitude": "27.7691736",
                "longitude": "-82.6379893"
              },
              "sameAs": [
                "https://github.com/CivilServiceUSA",
                "https://twitter.com/CivilServiceUSA",
                "https://www.facebook.com/CivilServiceUSA/"
              ]
            },
            "areaServed": {
              "@type": "Country",
              "name": "US"
            },
            "hasOfferCatalog": {
              "@type": "OfferCatalog",
              "name": "Civil Services",
              "itemListElement": [
                {
                  "@type": "OfferCatalog",
                  "name": "Slack Team",
                  "itemListElement": [
                    {
                      "@type": "Offer",
                      "itemOffered": {
                        "@type": "Service",
                        "name": "Local, State & Federal Governments Data"
                      }
                    }
                  ]
                }
              ]
            }
          }
        </script>

        <!-- App Icons -->

        <link rel="shortcut icon" href="favicon.ico">
        <link rel="apple-touch-icon" sizes="144x144" href="assets/images/favicon-retina-ipad.png">
        <link rel="apple-touch-icon" sizes="114x114" href="assets/images/favicon-retina-iphone.png">
        <link rel="apple-touch-icon" sizes="72x72" href="assets/images/favicon-standard-ipad.png">
        <link rel="apple-touch-icon" sizes="57x57" href="assets/images/favicon-standard-iphone.png">

        <!-- Style Sheets -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/main.css">
    </head>
    <body>

    <!-- Header -->
    <header id="header">
        <img src="assets/images/logo.png" width="100px">
        <h1>Join our #slack community</h1>
        <p><b>Civil Services</b> is a team dedicated to making it possible for citizens <br>to be a part of what is happening in their Local, State &amp; Federal Governments.</p>
    </header>

    <!-- Signup Form -->
    <form id="signup-form" method="post" action="#" autocomplete="off">
        <input type="email" name="email" id="email" placeholder="Email Address" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" />
        <input type="text" name="invite" id="invite" placeholder="Invite Code" maxlength="6" value="<?= $_GET['invite']; ?>" pattern="[a-zA-Z0-9]{6}" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" <?php if(isset($_GET['invite'])) echo 'readonly="readonly" style="display: none;"'; ?> />
        <input type="submit" value="Get an invite" />
    </form>

    <!-- Signup -->
    <p class="login">Already part of our team? &nbsp; <a href="https://civil-services.slack.com" target="_blank">Sign in here.</a></p>

    <!-- Footer -->
    <footer id="footer">
        <ul class="icons">
            <li>
                <a href="https://github.com/CivilServiceUSA" class="icon fa-github" target="_blank">
                    <span class="label">GitHub</span>
                </a>
            </li>
            <li>
                <a href="https://twitter.com/CivilServiceUSA" class="icon fa-twitter" target="_blank">
                    <span class="label">Twitter</span>
                </a>
            </li>
            <li>
                <a href="https://www.facebook.com/CivilServiceUSA/" class="icon fa-facebook" target="_blank">
                    <span class="label">Facebook</span>
                </a>
            </li>
        </ul>
        <ul class="copyright">
            <li>&copy; <a href="https://civil.services">Civil Services</a></li>
        </ul>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="assets/js/main.js"></script>

    </body>
</html>
