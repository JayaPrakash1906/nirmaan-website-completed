import React, {useState} from "react";
import { Link, NavLink } from "react-router-dom";
import { motion } from "framer-motion";
import "./navBar.css";
import nirmanLogoNav from "../../images/nirmaan-logo-small.png";
import iitmLogo from "../../images/iitmLogo.png";
import userIcon from "../../images/user.png";

function NavBar() {

  const [toggleHamburger, setToggleHamburger] = useState(false);

  const handleHamburger = () => {
    setToggleHamburger(!toggleHamburger);
  }

  return (
    <motion.div
      initial={{ opacity: 0 }}
      whileInView={{ opacity: 1 }}
      transition={{ duration: 1 }}
      exit={{ opacity: 1 }}
      className={`main-page-container ${toggleHamburger ? "main-page-container--active" : ""}`}>
      <div className={`main-navbar ${toggleHamburger ? "main-navbar--active" : ""}`}>

        <div className={`hamburger-menu ${toggleHamburger ? "hamburger--active" : ""}`} 
        onClick={handleHamburger}
        >
          <span className="habmurger-line"></span>
          <span className="habmurger-line"></span>
          <span className="habmurger-line"></span>
        </div>
        <div className={`main-navbar__wrapper ${toggleHamburger ? "main-navbar__wrapper--active" : ""}`}>
        <div className="nirm-nav">
          <Link to="/">
            <img src={nirmanLogoNav} />
          </Link>
        </div>
        <div className="black-nav">
          <div className="iitm-logo-nav">
            <img src={iitmLogo} />
          </div>
          <div className="links-nav">
            <ul>
            {/* <li className="drop-down-nav">
                <Link to="/about-us">About</Link>
                <div className="dropdown-content">
                  <div>
                    <Link to="/about-us">About</Link>
                  </div>
                  <div>
                    <Link to="/about-interaction">Timelines</Link>
                  </div>
                </div>
              </li> */}
              {/* <li>
                <Link to="/teams">Team</Link>
              </li> */}
              <li className="drop-down-nav">
                <Link to="/join-us">Startups</Link>

                <div className="dropdown-content">
                  <div>
                    <Link to="/projects">Projects</Link>
                  </div>
                  <div>
                    <Link to="/work-with-start-ups">Work with Startups</Link>
                  </div>
                </div>
              </li>
              <li>
                <Link to="/media">Media</Link>
              </li>
              <li>
                <Link to="/join-us">Join us</Link>
              </li>
              <li className="login-mobile">
                <img src={userIcon} />
              </li>
            </ul>
          </div>
        </div>
        </div>
        <div className="log-in desktop">
          <img src={userIcon} />
        </div>
      </div>
    </motion.div>
  );
}

export default NavBar;
