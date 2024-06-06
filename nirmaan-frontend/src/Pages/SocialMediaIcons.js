import React from "react";

import youTube from "../images/youTube.png";
import twitter from "../images/twitter.png";
import linkedIN from "../images/LinkedIn.png";
import instagram from "../images/instagram.png";
import mail from "../images/mail.png";
import facebook from "../images/faceBook.png";

import "./homeFirstPage.css";

function SocialMediaIcons() {
  return (
    <ul className="social-icons">
      <li>
        <a href="https://www.youtube.com/@nirmaaniitm4437/featured">
          <img src={youTube} alt="youTube" />
        </a>
      </li>
      <li>
        <a href="https://twitter.com/Nirmaan_IITM">
          <img src={twitter} alt="youTube" />
        </a>
      </li>
      <li>
        <a href="https://www.linkedin.com/in/nirmaan-iitm/">
          <img src={linkedIN} alt="youTube" />
        </a>
      </li>
      <li>
        <a href="https://www.instagram.com/nirmaan_iitm/">
          <img src={instagram} alt="youTube" />
        </a>
      </li>
    </ul>
  );
}

export default SocialMediaIcons;
