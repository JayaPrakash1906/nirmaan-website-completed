import React, { useState , useEffect } from "react";
import { motion } from "framer-motion";
import "./workWithStartUp.css";
import NavBar from "./NavBar";
import Footer from "../Footer";
import CheckBox from "./inner-sub-compoents.js/CheckBox";
import SearchBar from "./inner-sub-compoents.js/SearchBar";
import axios from "axios";
import WorkWithNirman from "./inner-sub-compoents.js/WorkWithNirman";
import filterToggle from '../../images/icons/filter-icon.png';
import API_BASE_URL from "../../config";

function WorkWithStartUp() {
  const [toggleFilter, setToggleFilter] = useState(false);
  const [jobs, setJobs] = useState([]);
  // const [nirmaanJobs, setNirmaanJobs] = useState([]);


  useEffect(() => {
    // Fetch projects from Laravel API
    fetch(API_BASE_URL+'/jobs')
      .then((response) => response.json())
      .then((data) => {
        setJobs(data)
        // setNirmaanJobs(data)
      })
      .catch((error) => console.error(error));
  }, []);

  const handleToggleFilter = () => {
    setToggleFilter(!toggleFilter);
  };

  const roles = [
    { role: "Front End Dev - Web", id: 'Front End Dev - Web' },
    { role: "Back End Dev - Web", id: 'Back End Dev - Web' },
    { role: "Front End Dev", id: 'Front End Dev' },
    { role: "Designer", id: 'Designer' },
    { role: "Full Stack - App", id: 'Full Stack - App' },
    { role: "Back End Dev ", id: 'Back End Dev' },
  ];
  const Remunerations = [
    { remuneration: "unpaid", id: 1 },
    { remuneration: "paid", id: 2 },
  ];

  const sectors = [
    { id: "aerospace", sector: "Aerospace" },
    { id: "blockchain", sector: "Blockchain" },
    { id: "cleanTech", sector: "Clean Technology" },
    { id: "digitalMarketing", sector: "Digital Marketing" },
    { id: "edTech", sector: "Ed Tech" },
    { id: "eCommerce", sector: "E Commerce" },
  ];

  const initialVisibleRoles = 4;
  const [selectedRole, setSelectedRole] = useState([]);
  const [visibleRoles, setVisibleRoles] = useState(
    roles.slice(0, initialVisibleRoles)
  );
  const [selectedRemuneration, setSelectedRemuneration] = useState([]);
  const [selectedSectors2, setSelectedSectors2] = useState([]);
  const [showAll, setShowAll] = useState(false);

  const [searchTerm, setSearchTerm] = useState("");
  const [searchResult1, setSearchResult1] = useState(null);
  const [searchResult2, setSearchResult2] = useState(null);

  // api call
  useEffect(() => {
    const data = {
      search : searchTerm,
    }
    axios.post(API_BASE_URL+"/search-jobs", data)
      .then(response => {
        // Handle successful API response
        setJobs(response.data);
      })
      .catch(error => {
        // Handle error cases
        console.error('Error making API call:', error);
      });
    // console.log("remuneration", selectedRemuneration);
  }, [searchTerm]);

  return (
    <>
      <NavBar />
      <div className="wws-main">
        <div className={`wws-checkbox ${toggleFilter ? "active-filter" : ""}`}>
          <button class="filter-toggle-btn"  onClick={handleToggleFilter}>
            <img src={filterToggle} alt="" />
          </button>
          <CheckBox
            roles={roles}
            Remunerations={Remunerations}
            sectors2={sectors}
            selectedRole={selectedRole}
            setSelectedRole={setSelectedRole}
            selectedRemuneration={selectedRemuneration}
            setSelectedRemuneration={setSelectedRemuneration}
            selectedSectors2={selectedSectors2}
            setSelectedSectors2={setSelectedSectors2}
            Title1="Role"
            Title2="Remuneration"
            initialVisibleRoles={initialVisibleRoles}
            showAll={showAll}
            setShowAll={setShowAll}
            visibleRoles={visibleRoles}
            setVisibleRoles={setVisibleRoles}
            setJobs={setJobs}
          />
        </div>

        <div className="wws-right-div">
          <SearchBar
            setSearchTerm={setSearchTerm}
          />
          <div className="wws-table">
            <motion.div
              initial={{ opacity: 0 }}
              whileInView={{ opacity: 1 }}
              transition={{ duration: 1 }}
              exit={{ opacity: 1 }}
              className="open-roles-nirman">
              Open roles to work with Nirmaan
            </motion.div>
            <motion.div
              initial={{ opacity: 0 }}
              whileInView={{ opacity: 1 }}
              transition={{ duration: 1 }}
              exit={{ opacity: 1 }}
              className="wws-list-with-nirman">
              <ul>
                <li className="list-role">Role</li>
                <li className="list-duration">Duration</li>
                <li className="list-remuner">Remuneration</li>
                <li className="list-actions">Actions</li>
              </ul>
            </motion.div>
            <div className="wwn-details">
              {/* //data from api response  */}
              {
                jobs.map((job)=>{
                  if(job.start_up_category === 'nirmaan'){
                    return(
                      <WorkWithNirman
                  role={job.role}
                  duration={job.duration}
                  Stipend={"INR "+job.remuneration+"/month"}
                  link={job.link}
                />
                    )
                  }
                })
              }
            </div>
          </div>
          <motion.div
            initial={{ opacity: 0 }}
            whileInView={{ opacity: 1 }}
            transition={{ duration: 1 }}
            exit={{ opacity: 1 }}
            className="open-roles-nirman">
            Open roles to work with STARTUPS ASSSOCIATED
          </motion.div>
          <div className="wws-startup-associated">
            <motion.div
              initial={{ opacity: 0 }}
              whileInView={{ opacity: 1 }}
              transition={{ duration: 1 }}
              exit={{ opacity: 1 }}
              className="wws-list-with-nirman">
              <ul>
                <li className="list-role-2">Role</li>
                <li className="wwnstart-up">StartUp</li>
                <li>Duration</li>
                <li>Remuneration</li>
                <li>Actions</li>
              </ul>
            </motion.div>
            <div className="wwn-details wwn-details-large">
            {
                jobs.map((job)=>{
                  if(job.start_up_category !== 'nirmaan'){
                    return(
                      <WorkWithNirman
                role={job.role}
                duration={job.duration}
                Stipend={"INR "+job.remuneration+"/month"}
                link={job.link}
                startUp={job.startup_name}
                tech={job.sector}
              />
                    )
                  }
                })
              }
            </div>
          </div>
        </div>
      </div>
      <Footer />
    </>
  );
}

export default WorkWithStartUp;
