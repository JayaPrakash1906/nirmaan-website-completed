import React from "react";
import { motion } from "framer-motion";
import teamInfo from "../../../images/teamsinfo.png";
import "./teamsFirst.css";

function TeamsFirstComp({ name, tagLine, designer, content , image }) {

  return (
    <motion.div
      initial={{ opacity: 0 }}
      whileInView={{ opacity: 1 }}
      transition={{ duration: 1 }}
      className="first-img team-card"
      style={{ postion: "relative" }}

    >
      <div className="first-img__box">
        <img src={image} />
      </div>
      <div className="black-stripe">
        <div className="name">{name}</div>
        <div className="tagline">{tagLine}</div>
      </div>

      <div
        className="black-div-second">
        <div className="green-stripe-second"></div>
        <div className="second-name">{name}</div>
        <div className="designer">{designer}</div>
        <div className="second-content">{content}</div>
        <div className="close">Close</div>
      </div>
    </motion.div>
  );
}

export default TeamsFirstComp;
