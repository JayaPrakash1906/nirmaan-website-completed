import React from "react";

import "./about.css";

import TeamSubCompTitle from "./inner-sub-compoents.js/TeamSubCompTitle";
import TimeLine from "./inner-sub-compoents.js/TimeLine";
import nirmanLogo from "../../images/NIRMAAN-LOGO-NEW 1.png";
import iitmLogo from "../../images/iitmlogo-2.png";
import aboutVect from "../../images/teams-vect.png";
import aboutVectLeft from "../../images/teamsVectLeft.png";
import { motion } from "framer-motion";

function About({stats}) {
  return (
    <>
      <TeamSubCompTitle
        AboutSubtitle="SEE OUR"
        AboutTopic="JOURNEY"
        subContent="Nirmaan, The Pre-incubator, at IIT Madras is the first of its kind dedicated pre-incubator on a college campus in the country."
      />
      <TimeLine />
      <div className="sub-comp-about">
        <TeamSubCompTitle
          AboutSubtitle="NIRMAAN IN"
          AboutTopic="NUMBERS"
          flag="true"
          subContent="Nirmaan, The Pre-incubator, at IIT Madras is the first of its kind dedicated pre-incubator on a college campus in the country."
        />
      </div>

      <img src={aboutVect} className="about-vect-right" />
      <div className="nirman-numbers">
        <motion.div
          initial={{ opacity: 0 }}
          whileInView={{ opacity: 1 }}
          transition={{ duration: 1 }}
          exit={{ opacity: 1 }}
          className="nir-left">
          <img src={nirmanLogo} className="a-nir-logo" />
          <div className="a-iitm-logo-box">
            <img src={iitmLogo} className="a-iitm-logo" />
          </div>
        </motion.div>
        <motion.div
          initial={{ opacity: 0 }}
          whileInView={{ opacity: 1 }}
          transition={{ duration: 1 }}
          exit={{ opacity: 1 }}
          className="numbers-main">
          <div className="numbers-5">
            <div className="num-heading">
              TEAMS TRAINED
              <div className="num-info trained">{stats.teams_trained}</div>
            </div>
            <div className="num-heading">
              GRADUATED TEAMS
              <div className="num-info grad">{stats.graduated_teams}</div>
            </div>
            <div className="num-heading">
              ACTIVE TEAMS
              <div className="num-info active">{stats.active_teams}</div>
            </div>
            <div className="num-heading">
              FUNDS RAISED
              <div className="num-info funds">{stats.funds_raised}+ Cr</div>
            </div>
          </div>
          <div className="num-heading total-margin">
            TOTAL VALUATION
            <div className="num-info total">{stats.total_valuation}+ Cr</div>
          </div>
        </motion.div>
      </div>
    </>
  );
}

export default About;
