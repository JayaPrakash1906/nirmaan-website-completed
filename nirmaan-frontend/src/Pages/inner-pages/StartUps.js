import React, { useState, useEffect } from 'react';

import NavBar from "./NavBar";
import Footer from "../Footer";
import "./startUp.css";

import whatImg from "../../images/startUp-What.png";
import provideImg from "../../images/startUpProvide.png";
import dottedLine from "../../images/dotted_line.jpeg";
import iitmlogo from "../../images/iitmlogo-2.png";
import nirLogo from "../../images/NIRMAAN-LOGO-NEW 1.png";
import StartUpSUbComp from "./inner-sub-compoents.js/StartUpSUbComp";
import mentor from "../../images/mentor.png";
import brief from "../../images/brief.png";
import frame from "../../images/frame.png";
import setting from "../../images/settings (2).png";
import StartUpCard from "./inner-sub-compoents.js/StartUpCard";
import TeamSubCompTitle from "./inner-sub-compoents.js/TeamSubCompTitle";
import halfLeft from "../../images/half-first.png";
import halfRight from "../../images/halfRight.png";
import secondImg from "../../images/middleimg.png";
import { motion } from "framer-motion";
import API_BASE_URL from '../../config';

function StartUps() {
  const [links, setLinks] = useState([]);
  useEffect(() => {
    fetch(API_BASE_URL+'/startups_main')
      .then((response) => response.json())
      .then((data) => setLinks(data))
      .catch((error) => console.error(error));
  }, []);
  return (
    <>
      <NavBar />
      <div className="sp-main">
        <motion.div
          initial={{ opacity: 0 }}
          whileInView={{ opacity: 1 }}
          transition={{ duration: 1 }}
          exit={{ opacity: 1 }}
          className="sp-left">
          <div className="startup-heading">
            <div className="startup-what">
              <img src={whatImg} />
            </div>
            <div className="startup-we-provide">
              <img src={provideImg} />
            </div>
          </div>
          <div className="startup-logo">
            <img src={dottedLine} className="dotted-sp" />
            <img src={iitmlogo} className="logo-sp" />
            <img src={nirLogo} className="nir-sp" />
          </div>
          <motion.div
            initial={{ opacity: 0 }}
            whileInView={{ opacity: 1 }}
            transition={{ duration: 1 }}
            exit={{ opacity: 1 }}
            className="sp-content">
            Nirmaan, The Pre-incubator, IIT Madras, aims to provide the
            experience of Entrepreneurship to the student community. NIRMAAN
            acts as a sandbox for aspiring entrepreneurs of IIT Madras to
            practice the highs and lows of entrepreneurship with a deferred
            placement. We strive to offer our students a firsthand experience
            of what it takes to be an entrepreneur.
          </motion.div>
        </motion.div>

        <div className="sp-right">
          {/* <div className="sp-grey"> */}
            <div className="sp-white">
              <div className="sp-sub-img">
                <StartUpSUbComp
                  image={mentor}
                  heading="Mentoring"
                  content="Project teams are connected with mentors, who will guide and nudge these groups towards business success"
                />
              </div>
              <div className="sp-sub-img">
                <StartUpSUbComp
                  image={brief}
                  heading="Workshops"
                  content="Seasoned professionals and Industry experts conduct workshops on various
                  aspects of startup such as customer discovery…"
                />
              </div>
              <div className="sp-sub-img">
                <StartUpSUbComp
                  image={frame}
                  heading="Worspace"
                  content="A place to interact, collaborate, and innovate, startups get access to a
                  dedicated workspace at the Sudha & Shankar Innovation Hub"
                />
              </div>
              <div className="sp-sub-img">
                <StartUpSUbComp
                  image={setting}
                  heading="Tools & Resources"
                  content="Access to AWS credit and machinery for fabrication."
                />
              </div>
            </div>
          {/* </div> */}
        </div>
      </div>

      {/* second section */}
      <div className="second-green-section">
        <div className="sub-sp-green">
          <div className="sp-cards">
            <StartUpCard
              heading="Investors"
              apply="REACH TO US"
              link1 = {links[0]}
              content1="We have more than 100 active startups spread across 9+ domains with 40% of them involved in sustainability and deep tech sectors."
              content2="The program has evolved by leaps and bounds over its relatively small existence and has helped the teams generate more than 100 crores in revenue with as many as 2 teams being a part of the highly acclaimed accelerator program, Y-Combinator and 3 teams being listed in the top 30 startups to watch out for in that last year alone."
            />
          </div>
          <div className="sp-cards">
            <StartUpCard
              heading="Startups"
              apply="WORK WITH US"
              link1 = {"https://docs.google.com/spreadsheets/d/1hPbCXKMoFnPTWuAAuiCgeV6BlC9g_8a48WdCDiQbmzY/edit#gid=1594600925"}
              content1="Nirmaan provides the sandbox space for entrepreneurs across the institute community to ideate, build, launch, learn and eventually realise their dreams to reality. Besides providing a well-equipped, collaborative workspace, supportive and encouraging environment, and much-needed financial assistance, ‘The Pre-incubator’ connects fledgling start-ups with experienced mentors who provide specialised technical and business guidance immensely valuable in transforming ideas into practical businesses."
            />
          </div>
          <div className="sp-cards">
            <StartUpCard
              heading="Interns"
              // link1={links[2][0]}
              // link2={links[2][1]}
              content1="We've got tons of internships up for grabs in hardware, software, and management fields all year round."
              content2="It's not just about diving into the world of entrepreneurship – it's also a massive learning experience for everyone involved"
            />
          </div>
        </div>
      </div>
      {/* <TeamSubCompTitle
        AboutSubtitle="SEE HOW"
        AboutTopic="WE WORK"
        flag="true"
      />

      <motion.div
        initial={{ opacity: 0 }}
        whileInView={{ opacity: 1 }}
        transition={{ duration: 1 }}
        exit={{ opacity: 1 }}
        className="last-div-sp">
        <div className="last-div-sp__img-box">
          <img src={halfLeft} />
        </div>
        <div className="last-div-sp__img-box">
          <img src={secondImg} />
        </div>
        <div className="last-div-sp__img-box">
          <img src={halfRight} />
        </div>
      </motion.div> */}
      <Footer />
    </>
  );
}

export default StartUps;
