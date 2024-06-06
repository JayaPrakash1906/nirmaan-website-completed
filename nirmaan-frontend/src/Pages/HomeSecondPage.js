import React from "react";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faArrowRight } from "@fortawesome/free-solid-svg-icons";
import nirmaanLogo from "../images/NIRMAAN-LOGO-NEW 1.png";

import "./homeSecondPage.css";
import vect2 from "../images/Vector2.png";
import whoWeAreImg from "../images/WHO WE ARE.png";
import CarouselSecondPage from "./sub-components/CarouselSecondPage";

function HomeSecondPage() {
  const handleMeetOurTeam = () => {
    window.location.href = "/teams";
  };
  const handleSeeProjects = () => {
    window.location.href = "/projects";
  };
  return (
    <>

      <div className="secondPage-container">
        <div className="vertical green">WHAT WE OFFER</div>

        <div className="secondPage-inner-container">
          <div className="half-second-page">
            <div>
              <div className="whoWeAre-div">
                <div className="who-heading">
                  <h1>WHO <br /> WE<br /> ARE</h1>
                  {/* <img src={whoWeAreImg} /> */}
                </div>
                <div className="meetOurTeam-div">
                  <div className="team-heading" onClick={handleMeetOurTeam}>MEET OUR TEAM</div>
                  {/* <img src={vect2} className="vect2-logo" /> */}
                </div>
                <img className="nirmaanlogo-second" src={nirmaanLogo} alt="" />
              </div>
              <div className="whoWeAre__content-wrapper">

                <div className="about-nirmaan">
                  <div className="about-nirman-first-content">
                  Shaping Ideas, Shifting Paradigms! Immerse yourself in the realm of IIT Madras' visionary team,
                  where every profile narrates a saga of conquering challenges and embracing innovation. Our
                  members are the architects of transformation, weaving dreams into reality. We work with Atal
                  Innovation Mission and provide technical support and business guidance/mentorship to rising
                  entrepreneurial student teams. As you journey through their experiences, you'll witness how
                  ordinary moments evolve into extraordinary achievements
                  </div>
                </div>
                <div className="projects" onClick={handleSeeProjects}>
                  <b>SEE OUR</b> <span className="projects-breacker">PROJECTS{" "}</span>
                  <FontAwesomeIcon
                    icon={faArrowRight}
                    size="xs"
                    style={{ color: "#000000" }}
                  />
                </div>
              </div>
            </div>
            <div className="carousel-secondPage">
              <CarouselSecondPage />
            </div>
          </div>
        </div>
      </div>
    </>
  );
}

export default HomeSecondPage;
