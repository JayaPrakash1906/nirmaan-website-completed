import React from "react";
import { motion } from "framer-motion";
import "./workWithNirman.css";

function WorkWithNirman({ role, duration, Stipend, link, startUp, tech }) {
  const handleClickApply = () => {
    window.location.href = { link };
  };
  return (
    <motion.div
      initial={{ opacity: 0 }}
      whileInView={{ opacity: 1 }}
      transition={{ duration: 1 }}
      exit={{ opacity: 1 }}
      className="wwn-main">
      <div className="wwn-role">{role}</div>
      {startUp ? (
        <div>
          <div className="wwn-start-up">{startUp}</div>
          <div className="wwn-tech">{tech}</div>
        </div>
      ) : null}
      <div className="wwn-duration">{duration} months</div>
      <div className="wwn-stipend">{Stipend}</div>
      <div className="wwn-apply" onClick={handleClickApply}>
        APPLY
      </div>
    </motion.div>
  );
}

export default WorkWithNirman;
