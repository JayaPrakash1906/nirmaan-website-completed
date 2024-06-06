import React, { useEffect, useState, useRef } from "react";

import "./homeSixthPage.css";
import theyAre from "../images/THEY ARE.png";
import TAU from "../images/TALKING ABOUT US.png";
import img from "../images/sixth-div-img.png";
import sixthNirmanLogoSmall from "../images/nirmaan-logo-small.png";
import vectSmall from "../images/sixth-vector-3.png";
import dottedLineSixth from "../images/Group 137.png";
import whatImg from "../images/WHAT HAPPENS IN.png";
import SixScreenContent from "./sub-components/SixScreenContent";
import logo from '../images/six-screen-logo.png';
import logoMobile from '../images/six-logo-mb.png';
import API_BASE_URL from "../config";

function HomeSixthPage() {
  const [contents, setContents] = useState([]);
  useEffect(() => {
    // Fetch users from Laravel API
    fetch(API_BASE_URL+'/contents')
      .then((response) => response.json())
      .then((data) => setContents(data))
      .catch((error) => console.error(error));
  }, []);
  return (
    <div className="sixth-page-container">
      <div className="they-talking">
        <h1 className="they-talink__big">
          THEY<br /> ARE
        </h1>
        <h2 className="they-talking__small">
          TALKING <br /> ABOUT <br /> <span className="talking-thin">US</span>
        </h2>
      </div>
      <div className="sixthpage-first-inner-div">
        {/* <div className="they-talking">
          <h1 className="they-talink__big">
            THEY<br /> ARE
          </h1>
          <h2 className="they-talking__small">
            TALKING <br /> ABOUT <br /> <span className="talking-thin">US</span>
          </h2>
        </div> */}
        {/* {contents.map((content)=>{
          return(
            <SixScreenContent
          title={content.event_name}
          // img={"http://127.0.0.1:8000/api/images/"+content.image}
          img={img}
          alt="event #1"
          text={content.content}
        />
          );
        })} */}
        
        <SixScreenContent
          title="Richa Agrawal, Associate Professor at DoMS, IIT Madras"
          //img={''}
          //alt="event #1"
          text="Entrepreneurship is not necessarily a skill. It’s a mindset and it is the understanding that even if the first idea that you took fails, it's not the end of your journey as an entrepreneur. Nirmaan prepares them for the market better by giving those inputs to them. As they join their mind in terms of identifying your customer and understanding their needs. Modifying your product, you know, and testing it out, iterating it so that benefits them"
        />

        <div className="linear-gradient-sixth mobile-contact">
          <div className="sixth-logo">
            <img src={logo} id="sixth-page-vect" />
          </div>
          <p className="like">DO YOU LIKE WHAT YOU SEE?</p>
          <div className="contact"><b>CONTACT</b> <span className="us-content">US</span></div>
        </div>

      </div>
      <div className="sixthpage-second-inner-div">
        <img src={dottedLineSixth} />
        <div className="toggler">
          <div className="toggler-green"></div>
        </div>
      </div>
      <div className="sixthpage-third-inner-div">
        <div className="what-happens">
          <h2 className="what-happens__title">
            <span className="what-happens__thin">CONATCT</span>
            US
          </h2>
          <div className="sixth-logo mobile-six-logo">
            <img src={logoMobile} id="sixth-page-vect" />
          </div>
        </div>
        {/* <img src={whatImg} className="what-img-sixth" /> */}

        <div className="linear-gradient-sixth">
          <div className="sixth-logo">
            <img src={logo} id="sixth-page-vect" />
          </div>
          <p className="like">DO YOU LIKE WHAT YOU SEE?</p>
        </div>
      </div>
    </div>
  );
}

export default HomeSixthPage;
