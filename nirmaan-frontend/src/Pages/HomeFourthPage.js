import React from "react";

import "./homeFourthPage.css";
import dotted from "../images/Group 137.png";
import iitmlogo_2 from "../images/iitmlogo-2.png";
import nirmaanlogo from "../images/nirmaan-2.png";
import leftImg from "../images/left-img.png";
import bottom1 from "../images/bottom-1.png";
import bottom2 from "../images/bottom-2.png";
import rightImg from "../images/right-img.png";
import leftCut from "../images/left-num.png";
import bottom1Cut from "../images/bottom1-num.png";
import bottom2Cut from "../images/bottom2-num.png";
import rightCut from "../images/right-num.png";
import logoNir from "../images/logo-nir.png";
import forthBgLaptop from '../images/fourth-screen/fourth-bg-lap.png'
import Highlights from "./sub-components/Highlights";

function HomeFourthPage() {
  const handleSeeTeam = () => {
    window.location.href = "/teams";
  };
  const handleSeeJourney = () => {
    window.location.href = "/about-interaction";
  };
  return (
    <div className="fourth-page-container">
      <div className="team-jour">
        {/* <div className="dotted-line">
          <img src={dotted} alt="pattern" />
          <img src={dotted} alt="pattern" />
        </div> */}
        <div className="nirmaan-numerical">
          <div className="our-team common" onClick={handleSeeTeam}>
          <span className="our-team__desktop">
            SEE<br></br>OUR<br></br>TEAM
          </span>
          <span className="our-team__mobile">
            SEE OUR <br/> TEAM
          </span>
          </div>
          <div className="numbers-fourthPage">
            <div className="nir-num-wrapper4">
              <div className="nir-fourthPge">NIRMAAN</div>
              <div className="num-fourthPage">IN NUMBERS</div>
            </div>
          </div>
          <div className="journey common" onClick={handleSeeJourney}>
          <span className="our-team__desktop">
          SEE<br></br>OUR<br></br>JOURNEY
          </span>
          <span className="our-team__mobile">
            SEE OUR <br/> JOURNEY
          </span>
          </div>
        </div>
        <div className="iitmlogo-2">
          {" "}
          <img src={iitmlogo_2} />
        </div>
      </div>
      <div className="info-num">
        <div className="images">
        <div className="images__top">
        <Highlights modificator={'images__first'} title={"TEAMS TRAINED"} description={"148+"}/>
        <Highlights modificator={'images__second'} title={"GRADUATED"} description={"24"}/>
        </div>
        <div className="images__bottom">
        <Highlights modificator={'images__third'} title={"ACTIVE TEAMS"} description={"90"}/>
        <Highlights modificator={'images__fourth'} title={"TOTAL VALUATION"} description={"1000+ Cr"}/>
        </div>
        </div>
      </div>
    </div>
  );
}

export default HomeFourthPage;
