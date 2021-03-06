<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    @include('partials._header')
</head>

<body data-spy="scroll" data-target="#navbar">
    <div id="loader"></div>

    <div id="app">
        <!-- mobile start -->
<div id="mobile" class="d-lg-none">
    <!-- scroll-progress start -->
    <div class="scroll-progress">
        <div class="progress-container">
            <div class="progress-bar" id="myBar"></div>
        </div>
    </div>
    <!-- scroll-progress end -->
    <!-- mySidenav start -->
    <div id="mySidenav">
        <div class="navbar-logo">
            <a href="{{ route('index') }}">
                <img src="{{ asset('img/logo/swiss-mining.png') }}" alt="img/logo/swiss-mining.png" />
            </a>
        </div>
        <nav id="navbar">
            <ul>
                <li class="nav-item">
                    <a class="nav-link" href="#home">
                        {{ __('translate.home') }}
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    <!-- mySidenav end -->
    <!-- Close nav start -->
    <div id="close-nav"></div>
    <!-- Close nav end -->
</div>
<!-- mobile end -->
<!-- Header start -->
<header id="header" class="fixed-top d-none d-lg-block">
    <div class="container-fluid">
        <!-- Navbar start -->
        <div id="navbar">
            <div class="row align-items-md-center">
                <div class="col-lg-2">
                    <div id="logo">
                        <a href="{{ route('index') }}">
                            <img src="{{ asset('img/logo/swiss-mining.png') }}" class="logo" alt="img/logo/swiss-mining.png" />
                        </a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <nav id="nav-bar" class="navbar float-md-right pr-md-0">
                        <ul id="nav" class="nav nav-pills">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('index') }}">{{ __('translate.home') }}</a>
                            </li>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar end -->
    </div>
</header>
<!-- Header end -->

        <div id="impressum">
            <div class="container">
                <h4>
                Impressum Swissmining:
                </h4>
                <p class="text-center">
                    Swiss Mining Ltd
                    <br />
                    20-22 Wenlock Road
                    <br />
                    London, UK
                    <br />
                    <br />                    
                    Registration Number: 11356186
                    <br />
                    <br />                    
                    Swiss Mining S.C.A
                    <br />
                    21-25 Allee Scheffer
                    <br />
                    2520 Luxembourg
                    <br />
                    <br />
                    Registration Number: B209153
                </p>
                <h4>
                    Rep.Office Swiss Mining Ltd Switzerland:
                </h4>                
                <p class="text-center">
                    WebGates Gmbh
                    <br />
                    Frenkendörferstrasse 27
                    <br />
                    4410 Liestal
                    <br />
                    Switzerland
                    <br />
                    <br />
                    Tel: +41 61 923 08 08
                    <br />
                    Tel: +41 76 571 30 40
                    <br />
                    <br />
                    Registration Number: CHE-490.004.698
                    <br />
                </p>
                <h4>Haftungsausschluss:</h4>
                <h5>
                    1. Inhalt des Onlineangebotes
                </h5>
                <p>
                    Der Autor übernimmt keinerlei Gewähr für die Aktualität, Korrektheit, Vollständigkeit oder Qualität der bereitgestellten Informationen. Haftungsansprüche gegen den Autor, welche sich auf Schäden materieller oder ideeller Art beziehen, die durch die Nutzung oder Nichtnutzung der dargebotenen Informationen bzw. durch die Nutzung fehlerhafter und unvollständiger Informationen verursacht wurden, sind grundsätzlich ausgeschlossen, sofern seitens des Autors kein nachweislich vorsätzliches oder grob fahrlässiges Verschulden vorliegt. Alle Angebote sind freibleibend und unverbindlich. Der Autor behält es sich ausdrücklich vor, Teile der Seiten oder das gesamte Angebot ohne gesonderte Ankündigung zu verändern, zu ergänzen, zu löschen oder die Veröffentlichung zeitweise oder endgültig einzustellen.
                </p>
                <h5>
                    2. Verweise und Links
                </h5>
                <p>
                    Bei direkten oder indirekten Verweisen auf fremde Webseiten ("Hyperlinks"), die außerhalb des Verantwortungsbereiches des Autors liegen, würde eine Haftungsverpflichtung ausschließlich in dem Fall in Kraft treten, in dem der Autor von den Inhalten Kenntnis hat und es ihm technisch möglich und zumutbar wäre, die Nutzung im Falle rechtswidriger Inhalte zu verhindern. Der Autor erklärt hiermit ausdrücklich, dass zum Zeitpunkt der Linksetzung keine illegalen Inhalte auf den zu verlinkenden Seiten erkennbar waren. Auf die aktuelle und zukünftige Gestaltung, die Inhalte oder die Urheberschaft der verlinkten/verknüpften Seiten hat der Autor keinerlei Einfluss. Deshalb distanziert er sich hiermit ausdrücklich von allen Inhalten aller verlinkten /verknüpften Seiten, die nach der Linksetzung verändert wurden. Diese Feststellung gilt für alle innerhalb des eigenen Internetangebotes gesetzten Links und Verweise sowie für Fremdeinträge in vom Autor eingerichteten Gästebüchern, Diskussionsforen, Linkverzeichnissen, Mailinglisten und in allen anderen Formen von Datenbanken, auf deren Inhalt externe Schreibzugriffe möglich sind. Für illegale, fehlerhafte oder unvollständige Inhalte und insbesondere für Schäden, die aus der Nutzung oder Nichtnutzung solcherart dargebotener Informationen entstehen, haftet allein der Anbieter der Seite, auf welche verwiesen wurde, nicht derjenige, der über Links auf die jeweilige Veröffentlichung lediglich verweist.
                </p>
                <h5>
                    3. Urheber- und Kennzeichenrecht
                </h3>
                <p>
                    Der Autor ist bestrebt, in allen Publikationen die Urheberrechte der verwendeten Bilder, Grafiken, Tondokumente, Videosequenzen und Texte zu beachten, von ihm selbst erstellte Bilder, Grafiken, Tondokumente, Videosequenzen und Texte zu nutzen oder auf lizenzfreie Grafiken, Tondokumente, Videosequenzen und Texte zurückzugreifen. Alle innerhalb des Internetangebotes genannten und ggf. durch Dritte geschützten Marken- und Warenzeichen unterliegen uneingeschränkt den Bestimmungen des jeweils gültigen Kennzeichenrechts und den Besitzrechten der jeweiligen eingetragenen Eigentümer. Allein aufgrund der bloßen Nennung ist nicht der Schluss zu ziehen, dass Markenzeichen nicht durch Rechte Dritter geschützt sind! Das Copyright für veröffentlichte, vom Autor selbst erstellte Objekte bleibt allein beim Autor der Seiten. Eine Vervielfältigung oder Verwendung solcher Grafiken, Tondokumente, Videosequenzen und Texte in anderen elektronischen oder gedruckten Publikationen ist ohne ausdrückliche Zustimmung des Autors nicht gestattet.
                </p>
                <h5>
                    4. Datenschutz
                </h5>
                <p>
                    Sofern innerhalb des Internetangebotes die Möglichkeit zur Eingabe persönlicher oder geschäftlicher Daten (Emailadressen, Namen, Anschriften) besteht, so erfolgt die Preisgabe dieser Daten seitens des Nutzers auf ausdrücklich freiwilliger Basis. Die Inanspruchnahme und Bezahlung aller angebotenen Dienste ist - soweit technisch möglich und zumutbar - auch ohne Angabe solcher Daten bzw. unter Angabe anonymisierter Daten oder eines Pseudonyms gestattet. Die Nutzung der im Rahmen des Impressums oder vergleichbarer Angaben veröffentlichten Kontaktdaten wie Postanschriften, Telefon- und Faxnummern sowie Emailadressen durch Dritte zur Übersendung von nicht ausdrücklich angeforderten Informationen ist nicht gestattet. Rechtliche Schritte gegen die Versender von sogenannten Spam-Mails bei Verstössen gegen dieses Verbot sind ausdrücklich vorbehalten.
                </p>
                <h5>
                    5. Rechtswirksamkeit dieses Haftungsausschlusses
                </h5>
                <p>
                    Dieser Haftungsausschluss ist als Teil des Internetangebotes zu betrachten, von dem aus auf diese Seite verwiesen wurde. Sofern Teile oder einzelne Formulierungen dieses Textes der geltenden Rechtslage nicht, nicht mehr oder nicht vollständig entsprechen sollten, bleiben die übrigen Teile des Dokumentes in ihrem Inhalt und ihrer Gültigkeit davon unberührt.
                </p>
            </div>
        </div>
        <div class="push-footer"></div>
        <a href="javascript:void(0)" id="back-to-top" title="Back to top">
            <img src="{{ asset('img/top.png') }}" alt="img/top.png" />
        </a>
    </div>
    @include('partials._footer')
</body>
</html>
