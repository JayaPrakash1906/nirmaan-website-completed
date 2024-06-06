import React, { useState, useEffect } from 'react';
import { motion } from "framer-motion";
import NavBar from "./NavBar";
import Footer from "../Footer";
import "./teams.css";
import TeamSubCompTitle from "./inner-sub-compoents.js/TeamSubCompTitle";
import TeamsFirstComp from "./inner-sub-compoents.js/TeamsFirstComp.js";
import TeamsSecondComp from "./inner-sub-compoents.js/TeamsSecondComp.js";
import teamsVect from "../../images/teams-vect.png";
import API_BASE_URL from '../../config.js';

function Teams() {
  const [users, setUsers] = useState([]);

  useEffect(() => {
    // Fetch users from Laravel API
    fetch(API_BASE_URL+'/teams')
      .then((response) => response.json())
      .then((data) => setUsers(data))
      .catch((error) => console.error(error));
  }, []);
  return (
    <div className="teams-container">
      <NavBar />
      <div className="teams-wrapper-div">
        <img src={teamsVect} className="teams-vect" />
        <div className="positioning-teams">
          <div className="main-teams-container">
            <TeamSubCompTitle
              subtitle="Student Team"
              subContent=""
            />
          </div>
          <div className="teams-content left-ro-right margin-1">
            {
            users.filter((user) => user.team === 'student team').map((user,index)=>{
                return(
                  <div className={"comp-"+ (index+1).toString() +"-teams-content-2"}>
                  <TeamsFirstComp
                  content={user.description}
                  designer={user.designation}
                  name={user.name}
                  tagLine={user.tagline}
                  image = {API_BASE_URL+'/images/'+user.profile_image}
                />
                </div>
                )
            })}
          </div>

          {/* second set ---------------------------- */}

          <div className="main-teams-container-2">
            <TeamSubCompTitle
              subtitle="Faculty Advisors"
              subContent="Nirmaan, The Pre-incubator, at IIT Madras is the first of its kind dedicated pre-incubator on a college campus in the country."
              flag="true"
            />
          </div>

          <div className="teams-content right-to-left margin-2">
          {
            users.filter((user) => user.team === 'faculty advisors').map((user,index)=>{
                return(
                  <div className={"comp-"+ (index+1).toString() +"-teams-content-2"}>
                  <TeamsFirstComp
                  content={user.description}
                  designer={user.designation}
                  name={user.name}
                  tagLine={user.tagline}
                  image = {API_BASE_URL+'/images/'+user.profile_image}
                />
                </div>
                )
            })}
          </div>

          {/* thirst set-------------------------- */}

          <div className="main-teams-container-2">
            <TeamSubCompTitle
              subtitle="Board Advisors"
              subContent="Nirmaan, The Pre-incubator, at IIT Madras is the first of its kind dedicated pre-incubator on a college campus in the country."
            />
          </div>
          <div className="teams-content right-to-left margin-2">
            {
            users.filter((user) => user.team === 'board advisors').map((user,index)=>{
                return(
                  <div className={"comp-"+ (index+1).toString() +"-teams-content-2"}>
                  <TeamsFirstComp
                  content={user.description}
                  designer={user.designation}
                  name={user.name}
                  tagLine={user.tagline}
                  image = {API_BASE_URL+'/images/'+user.profile_image}
                />
                </div>
                )
            })}
          </div>
        </div>
      </div>
      <Footer />
    </div>
  );
}

export default Teams;
