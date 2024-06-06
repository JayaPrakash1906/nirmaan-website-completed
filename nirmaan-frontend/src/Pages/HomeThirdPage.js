import React from "react";

import "./homeThirdPage.css";
import vect3 from "../images/Vector3.png";
import nirmaanLogo from "../images/NIRMAAN-LOGO-NEW 1.png";
import mentoring from "../images/mentor.png";

import StartUpSUbComp from "./inner-pages/inner-sub-compoents.js/StartUpSUbComp";

function HomeThirdPage() {
  const handleApplyToNirman = () => {
    window.location.href = "/join-us";
  };
  const handleAboutUs = () => {
    window.location.href = "/about-us";
  };
  return (
    <>
      <div className="thirdPage-container">
        <div className="thirdPage-container__header">
          <div className="main-page__heading">
              <h1>WHAT WE OFFER</h1>
          </div>
          <div className="main-page__sub-wrapper">
            <button
              className="main-page__apply-to"
              onClick={handleApplyToNirman}
            >
              APPLY TO NIRMAAN
            </button>
            <h2 className="main-page__subtitle"></h2>
            <div className="main-page__logo">
              <img src={nirmaanLogo} alt="" />
            </div>
          </div>
        </div>
        <div className="offer-list-container">
          <div className="offer-list">
            <div className="white-inner-div-common-style">
              <StartUpSUbComp
                image={mentoring}
                heading="Mentoring"
                content="Sector-specific mentors for the teams to guide the student entrepreneurs w.r.t problem identification, Idea validation, and Customer discovery
"
                thirdComp="true"
              />
            </div>

            <div className="white-inner-div-common-style">
              <StartUpSUbComp
                image={mentoring}
                heading="Workshops"
                thirdComp="true"
                content="Seasoned professionals and Industry experts conduct workshops on various
                aspects of startup such as customer discovery…"
              />
            </div>
            <div className="white-inner-div-common-style">
              <StartUpSUbComp
                image={mentoring}
                heading="Workspace - Participation"
                thirdComp="true"
                content="A place to interact, collaborate, and innovate, startups get access to a
                dedicated workspace at the Sudha & Shankar Innovation Hub.
                "
              />
            </div>
            <div className="white-inner-div-common-style">
              <StartUpSUbComp
                image={mentoring}
                heading="Tools & Resources"
                thirdComp="true"
                content="Access AWS credit and fabrication machinery, empowering innovation and production capabilities for startups"
              />
            </div>
            <div className="white-inner-div-common-style">
              <StartUpSUbComp
                thirdComp="true"
                image={mentoring}
                heading="Funding"
                content="Seed funding of 2 lacs in Pratham program which can be immensely helpful"
              />
            </div>
            <div className="white-inner-div-common-style">
              <StartUpSUbComp
                thirdComp="true"
                image={mentoring}
                heading="Networking"
                content="Opportunity to interact with Industry leaders and Alumni of IIT and discuss
                the start-up
                "
              />
            </div>
            <div className="offer-btn__wrapper">
              <button className="offer-list__more-btn" onClick={handleAboutUs}>
                SEE MORE ABOUT US
              </button>
            </div>
            <button
              className="offer-list__more-btn mobile-about"
              onClick={handleAboutUs}
            >
              ABOUT US
            </button>
          </div>
        </div>
      </div>

      {/* <div className="thirdPage-container">
      <div className="header">
        <div className="sub-header">
          <div className="what-we-offer">
            WHAT WE <br></br> OFFER
          </div>
          <div className="logo-nirmaan">
            <div className="vect3">
              <img src={vect3} />
            </div>
            <div className="nirmaanLogo">
              <img src={nirmaanLogo} />
            </div>
          </div>
        </div>
        <div className="apply-subtitle">
          <div className="subtitle-to">THIS IS YOUR SUBTITLE</div>
          <div className="apply-to" onClick={handleApplyToNirman}>
            APPLY TO NIRMAAN
          </div>
        </div>
      </div>
      <div className="grey-div">
        <div className="white-div">
          <div className="white-inner-div">
            <div className="white-inner-div-common-style">
              <StartUpSUbComp
                image={mentoring}
                heading="Mentoring"
                content="Project teams are connected with mentors, who will guide and nudge these groups towards business success"
                thirdComp="true"
              />
            </div>

            <div className="white-inner-div-common-style">
              <StartUpSUbComp
                image={mentoring}
                heading="Workshops"
                thirdComp="true"
                content="Project teams are connected with mentors, who will guide and nudge these groups towards business success "
              />
            </div>
            <div className="white-inner-div-common-style">
              <StartUpSUbComp
                image={mentoring}
                heading="Workspace"
                thirdComp="true"
                content="Project teams are connected with mentors, who will guide and nudge these groups towards business success"
              />
            </div>
            <div className="white-inner-div-common-style">
              <StartUpSUbComp
                thirdComp="true"
                image={mentoring}
                heading="Participation"
                content="Project teams are connected with mentors, who will guide and nudge these groups towards business success"
              />
            </div>
            <div className="white-inner-div-common-style">
              <StartUpSUbComp
                thirdComp="true"
                image={mentoring}
                heading="Tools & Resources"
                content="Project teams are connected with mentors, who will guide and nudge these groups towards business success"
              />
            </div>
            <div className="white-inner-div-common-style">
              <StartUpSUbComp
                thirdComp="true"
                image={mentoring}
                heading="Pre-Seed funding"
                content="Project teams are connected with mentors, who will guide and nudge these groups towards business success"
              />
            </div>
            <div className="white-inner-div-common-style">
              <StartUpSUbComp
                thirdComp="true"
                image={mentoring}
                heading="Secure Facility"
                content="Project teams are connected with mentors, who will guide and nudge these groups towards business success"
              />
            </div>
            <div className="white-inner-div-common-style">
              <StartUpSUbComp
                thirdComp="true"
                image={mentoring}
                heading="OtherServices"
                content="Project teams are connected with mentors, who will guide and nudge these groups towards business success"
              />
            </div>
          </div>
        </div>
        <div className="third-more-about-us">SEE MORE ABOUT US</div>
        <div className="third-nirman-in-numbers">NIRMAN IN NUMBERS</div>
      </div>
      <div className="footer-third"></div>
    </div> */}
    </>
  );
}
export default HomeThirdPage;
