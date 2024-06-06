import React from "react";
import "./Footer.css";
import mailNnirmaan from "../images/mail-nir.png";
import location from "../images/location.png";
import SocialMediaIcons from "./SocialMediaIcons";

function Footer() {
  return (
    <>
      <footer className="common-footer">
        <div className="common-footer-container">
          <div className="common-footer__wrapper">
            <div className="common-footer__col email-address">
              <a
                href="mailto:nirmaan@smail.iitm.ac.in"
                className="common-footer__address"
              >
                <div className="common-footer__img-box">
                  <img src={mailNnirmaan} />
                </div>
                nirmaan@smail.iitm.ac.in
              </a>
              <a
                href="https://maps.app.goo.gl/zMA34y4bdVz5kYFs5"
                className="common-footer__address"
              >
                <div className="common-footer__img-box">
                  <img src={location} className="location" />
                </div>
                Indian Institute of Technology Madras, Chennai - 600036
              </a>
            </div>
            <div className="common-footer__col common-footer__col--social">
              <SocialMediaIcons />
            </div>
          </div>
          <div className="common-footer__copyright">
            <p>2023 IIT Madras - All rights reserved</p>
          </div>
        </div>
      </footer>
      {/* <motion.div
      initial={{ opacity: 0 }}
      whileInView={{ opacity: 1 }}
      transition={{ duration: 1 }}
      exit={{ opacity: 1 }}
      className="common-footer">
      <div className="common-footer-container">
      <div className="loc-mail">
        <div>
          <div className="mail-footer">
            <img src={mailNnirmaan} />
          </div>
          <img src={location} className="location" />
        </div>
        <div className="mailId-loc">
          <div className="mail-id">nirmaan@smail.iitm.ac.in</div>
          <div>Indian Institute of Technology Madras, Chennai - 600036</div>
        </div>
        <div className="social-icons-footer">
          <SocialMediaIcons />
        </div>
      </div>
      <div className="copyright-footer">
        <img src={copyRight} />
        <div>2023 IIT Madras - All rights reserved</div>
      </div>

      </div>
    </motion.div> */}
    </>
  );
}

export default Footer;
