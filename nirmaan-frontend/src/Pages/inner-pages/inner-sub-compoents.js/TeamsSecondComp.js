import React, { useRef } from "react";
import { motion } from "framer-motion";
import secondImg from "../../../images/teamsInfoSecond.png";
import "./teamsFirst.css"; //this components css properties mentioned int his file

function TeamsSecondComp({ name, designer, content }) {
  const scrollRef = useRef(null)
  return (
    <div>
      <motion.div
        initial={{ opacity: 0 }}
        whileInView={{ opacity: 1 }}
        transition={{ duration: 1 }}
        className="black-div-second">
        <div className="green-stripe-second"></div>
        <div className="second-name">{name}</div>
        <div className="designer">{designer}</div>
        <div className="second-content">{content}</div>
        <div className="close">Close</div>
      </motion.div>
      <div className="second-div-info">
        <img src={secondImg} />
      </div>
    </div>
  );
}

export default TeamsSecondComp;
