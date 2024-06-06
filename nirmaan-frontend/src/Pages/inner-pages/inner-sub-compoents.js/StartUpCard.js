import React from "react";
import { motion } from "framer-motion";
import "./startUpCard.css";

function StartUpCard({ heading, apply, content1, content2 , link1 ,link2 }) {
  return (
    <motion.div
      initial={{ opacity: 0 }}
      whileInView={{ opacity: 1 }}
      transition={{ duration: 1 }}
      exit={{ opacity: 1 }}
      className="card-main">
      <div className="card-heading-wrapper">
        <div className="card-for">For</div>
        <div className="card-heading">{heading}</div>
      </div>
      <div className="card-contents">
        <div className="card-content"> {content1}</div>
        <div className="card-content"> {content2}</div>
      </div>
      {heading == "Interns" ? (
        <div className="interns-div">
          <a href={link1} target="_blank" rel="noopener noreferrer"> <div className="intern-with">WORK WITH NIRMAAN</div> </a> 
          <a href={link2}> <div className="intern-with intern-active"> ACTIVE START UPS</div></a>
        </div>
      ) : null}
      {heading == "Investors" || heading == "Startups" ? (
        <a href={link1} target="_blank" rel="noopener noreferrer"><div className="card-apply">{apply}</div></a>
      ) : null}
    </motion.div>
  );
}

export default StartUpCard;
