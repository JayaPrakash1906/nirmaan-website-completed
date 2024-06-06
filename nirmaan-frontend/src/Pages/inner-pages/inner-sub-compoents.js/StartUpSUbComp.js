import React from "react";
import { motion } from "framer-motion";
import "./startSubComp.css";

function StartUpSUbComp({ image, heading, content, thirdComp }) {
  return (
    <motion.div
      initial={{ opacity: 0 }}
      whileInView={{ opacity: 1 }}
      transition={{ duration: 1 }}
      exit={{ opacity: 1 }}
      className="sp-flex">
      <div className="green-sp">
        <img src={image} />
      </div>
      <div className="sub-right-sp">
        <div className="strat-up-heading">{heading}</div>
        <div
          className={
            thirdComp
              ? "startup-content third-sub-comp-prop"
              : "startup-content"
          }
        >
          {content}
        </div>
      </div>
    </motion.div>
  );
}

export default StartUpSUbComp;
