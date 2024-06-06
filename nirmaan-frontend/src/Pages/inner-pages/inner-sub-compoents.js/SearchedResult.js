import React from "react";
import { motion } from "framer-motion";
import {  BrowserRouter as Router, Route, Link } from 'react-router-dom';
import "./searchedResult.css";
import API_BASE_URL from "../../../config";

function SearchedResult({ demoImg, projectName, projectContent, project}) {
  return (
    <motion.div
      initial={{ opacity: 0 }}
      whileInView={{ opacity: 1 }}
      transition={{ duration: 1 }}
      exit={{ opacity: 1 }}
      className="searched-result-main">
      <div>
        <img src={API_BASE_URL+'/images/'+demoImg} className="searched-img" />
      </div>
      <div className="searched-project-content-main">
        <div>
          <div className="sr-name">{projectName}</div>
          <div className="sr-content">
            {projectContent}
          </div>
        </div>
        <div className="button-div" >
          <Link to="/inner-start-up" state={{project:project}}>SEE THIS PROJECT</Link>
        </div>
      </div>
    </motion.div>
  );
}

export default SearchedResult;
