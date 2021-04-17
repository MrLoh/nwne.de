import Head from "next/head";
import Link from "next/link";

const Navigation = () => (
  <div className="nav">
    <h1 className="hidden">Navigation</h1>
    <div>
      <Link href="../aktuell/">
        <a>
          <span className="orange">ak</span>tuell
        </a>
      </Link>
    </div>
    <div>
      <Link href="../vernetzt/">
        <a>
          ver<span className="orange">net</span>zt
        </a>
      </Link>
    </div>
    <div>
      <Link href="../wirksam/">
        <a>
          <span className="orange">wirk</span>sam
        </a>
      </Link>
      <ul>
        <li>
          {"- "}
          <Link href="../wirksam/konzepte">
            <a>konzepte</a>
          </Link>
        </li>
        <li>
          {"- "}
          <Link href="../wirksam/studien">
            <a>studien</a>
          </Link>
        </li>
        <li>
          {"- "}
          <Link href="../wirksam/broschueren">
            <a>broschüren</a>
          </Link>
        </li>
        <li>
          {"- "}
          <Link href="../wirksam/bildung">
            <a>bildung</a>
          </Link>
        </li>
        <li>
          {"- "}
          <Link href="../wirksam/management">
            <a>management</a>
          </Link>
        </li>
      </ul>
    </div>
    <div>
      <Link href="../erreichbar/">
        <a>
          err<span className="orange">eich</span>bar
        </a>
      </Link>
    </div>
  </div>
);

const Header = () => (
  <div className="kopfzeile">
    <span></span>
    <div id="logo">
      <span>
        <span className="orange">netz</span>werk
        <br />
        neue <span className="orange">energie</span>
      </span>
    </div>
  </div>
);

const Footer = () => (
  <footer>
    <a href="../">Startseite</a>
    {" - "}
    <a href="../erreichbar">Kontakt</a>
    {" - "}
    <a href="../erreichbar/impressum">Impressum</a>
  </footer>
);

const App = ({ Component, pageProps }) => (
  <>
    <Head>
      <link rel="shortcut icon" href="/favicon.png" type="image/png" />
      <link rel="icon" href="/favicon.png" type="image/png" />
      <link rel="stylesheet" href="/main.css"></link>
    </Head>
    <div id="center">
      <div className="content">
        <Navigation />
        <Header />
        <Component {...pageProps} />
        <Footer />
      </div>
    </div>
  </>
);

export default App;
