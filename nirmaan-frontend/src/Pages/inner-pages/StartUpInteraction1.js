import React, { useState , useEffect } from "react";
import axios from "axios";
import { motion } from "framer-motion";
import "./startUpInteraction.css";

import NavBar from "./NavBar";
import Footer from "../Footer";
import SearchedResult from "./inner-sub-compoents.js/SearchedResult";
import CheckBox from "./inner-sub-compoents.js/CheckBox";
import SearchBar from "./inner-sub-compoents.js/SearchBar";
import demoImg from "../../images/chess.png";
import filterToggle from "../../images/icons/filter-icon.png";
import { BrowserRouter as Router, Route, Routes } from "react-router-dom";
import API_BASE_URL from "../../config";


function StartUpInteraction1() {
  const [selectedYears, setSelectedYears] = useState([]);
  const [selectedMonths, setSelectedMonths] = useState([]);
  const [selectedSectors, setSelectedSectors] = useState([]);

  const [searchResult, setSearchResult] = useState(null);
  const [searchTerm, setSearchTerm] = useState("");
  const [toggleFilter, setToggleFilter] = useState(false);
  const [projects, setProjects] = useState([]);

  useEffect(() => {
    // Fetch projects from Laravel API
    fetch(API_BASE_URL+'/projects')
      .then((response) => response.json())
      .then((data) => setProjects(data))
      .catch((error) => console.error(error));
  }, []);
  const handleToggleFilter = () => {
    setToggleFilter(!toggleFilter);
  };

  //api call http://127.0.0.1:8000/api/search-projects
  useEffect(() => {
    const data = {
      search : searchTerm,
    }
    axios.post(API_BASE_URL+"/search-projects", data)
      .then(response => {
        // Handle successful API response
        setProjects(response.data);
      })
      .catch(error => {
        // Handle error cases
        console.error('Error making API call:', error);
      });
  }, [searchTerm]);

  const years = [
    { id: "2021-22", year: "2021" },
    { id: "2020-21", year: "2020" },
    { id: "2019-20", year: "2019" },
    { id: "2018-19", year: "2018" },
    { id: "2017-18", year: "2017" },
  ];

  const months = [
    { id: "jan", month: "january" },
    { id: "july", month: "july" },
    { id: "aug", month: "august" },
  ];

  const sectors = [
    { id: "aerospace", sector: "Aerospace" },
    { id: "blockchain", sector: "Blockchain" },
    { id: "cleanTech", sector: "Clean Technology" },
    { id: "digitalMarketing", sector: "Digital Marketing" },
    { id: "edTech", sector: "Ed Tech" },
    { id: "eCommerce", sector: "E Commerce" },
  ];

  return (
    <div>
      <NavBar />
      <div className="start-up-interaction">
        <div className={`checkbox-margin ${toggleFilter ? "active-filter" : ""}`}>
          <button className="filter-toggle-btn" onClick={handleToggleFilter}>
            <img src={filterToggle} alt="" />
          </button>
          <CheckBox
            years={years}
            months={months}
            sectors={sectors}
            selectedYears={selectedYears}
            setSelectedYears={setSelectedYears}
            selectedMonths={selectedMonths}
            setSelectedMonths={setSelectedMonths}
            selectedSectors={selectedSectors}
            setSelectedSectors={setSelectedSectors}
            Title1="Incubation Year"
            Title2="Cohort Months"
            setProjects={setProjects}
          />
        </div>
        <div className="search-container">
          <SearchBar
            searchTerm={searchTerm}
            setSearchTerm={setSearchTerm}
          />
          {/* map the searched result when api is ready  */}
          {/* {searchResult.map((item) => {
            <div>
              
            </div>
          })} */}

          <div className="searched-container-div">
            {/* <button className="filter-toggle-btn" onClick={handleToggleFilter}>
              <img src={filterToggle} alt="" />
            </button> */}
            {projects.map((project)=>{
              return(
                <SearchedResult
                demoImg={project.profile_photo}
                projectName={project.project_name}
                projectContent={project.description}
                id = {project.id}
                project={project}
              />
              )
            })}
          </div>
        </div>
      </div>
      <Footer />
    </div>
  );
}

export default StartUpInteraction1;
