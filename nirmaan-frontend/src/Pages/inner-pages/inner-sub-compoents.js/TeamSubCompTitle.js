import React from "react";
import { motion } from "framer-motion";
import "./teamSubCompTitle.css";

function TeamSubCompTitle({
  subtitle,
  subContent,
  flag,
  MediaSubtitle,
  topic,
  AboutSubtitle,
  AboutTopic,
}) {
  return (
    <motion.div
      initial={{ opacity: 0 }}
      whileInView={{ opacity: 1 }}
      transition={{ duration: 1 }}
      exit={{ opacity: 1 }}
      className={flag ? "conditional-class" : "team-sub-main"}>

      <div className="second-sutitle-div">
        <div id={flag ? "c-title" : ""}>{subtitle}</div>
        {MediaSubtitle ? (
          <div className="blog-titles">
            <div className="media-title">{MediaSubtitle}</div>
            <div className="media-topic">{topic}</div>
          </div>
        ) : null}
        {AboutSubtitle ? (
          <div className="about-div">
            <div className={flag ? "about-m about-title right-padding" : "about-title"}>
              {AboutSubtitle}
            </div>
            <div className={flag ? "about-m about-topic right-padding" : "about-topic"}>
              {AboutTopic}
            </div>
          </div>
        ) : null}
      </div>
      <div
        className={flag ? "conditional-class-content" : "sub-content"}>
        {subContent}
      </div>
    </motion.div>
  );
}

export default TeamSubCompTitle;
