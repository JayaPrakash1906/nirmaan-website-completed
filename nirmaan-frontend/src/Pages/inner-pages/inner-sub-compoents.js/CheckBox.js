import React, { useEffect, useState } from "react";
import axios from 'axios';

import "./checkbox.css";
import Form from "react-bootstrap/Form";
import "bootstrap/dist/css/bootstrap.min.css";
import { motion } from "framer-motion";
import hcLine from "../../../images/hLine.png";
import API_BASE_URL from "../../../config";

function CheckBox({
  years,
  months,
  sectors,
  selectedYears,
  setSelectedYears,
  selectedMonths,
  setSelectedMonths,
  selectedSectors,
  setSelectedSectors,
  Title1,
  Title2,
  roles,
  Remunerations,
  sectors2,
  selectedRole,
  setSelectedRole,
  selectedRemuneration,
  setSelectedRemuneration,
  selectedSectors2,
  setSelectedSectors2,
  initialVisibleRoles,
  showAll,
  setShowAll,
  visibleRoles,
  setVisibleRoles,
  setProjects,
  setJobs
}) {
  const handleCheckboxChange = async (event, category) => {
    const value = event.target.value;
    // console.log("value", value);

    switch (category) {
      case "years":
        if (event.target.checked) {
          setSelectedYears([...selectedYears, value]);
        } else {
          setSelectedYears(selectedYears.filter((year) => year !== value));
        }

        break;

      case "months":
        if (event.target.checked) {
          setSelectedMonths([...selectedMonths, value]);
        } else {
          setSelectedMonths(selectedMonths.filter((month) => month !== value));
        }
        break;

      case "sectors":
        if (event.target.checked) {
          setSelectedSectors([...selectedSectors, value]);
        } else {
          setSelectedSectors(
            selectedSectors.filter((sector) => sector !== value)
          );
        }
        break;

      default:
        break;
        
    }
  };

  // for work with startups
  const handleCheckboxChange2 = (event, category) => {
    const value = event.target.value;
    // console.log("value", value);

    switch (category) {
      case "roles":
        if (event.target.checked) {
          setSelectedRole([...selectedRole, value]);
        } else {
          setSelectedRole(selectedRole.filter((role) => role !== value));
        }

        break;

      case "remunerations":
        if (event.target.checked) {
          setSelectedRemuneration([...selectedRemuneration, value]);
        } else {
          setSelectedRemuneration(
            selectedRemuneration.filter(
              (remuneration) => remuneration !== value
            )
          );
        }
        break;

      case "sectors2":
        if (event.target.checked) {
          setSelectedSectors2([...selectedSectors2, value]);
        } else {
          setSelectedSectors2(
            selectedSectors2.filter((sector2) => sector2 !== value)
          );
        }
        break;

      default:
        break;
    }
  };

  const handleViewMoreClick = () => {
    if (showAll) {
      setVisibleRoles(roles.slice(0, initialVisibleRoles));
    } else {
      setVisibleRoles(roles);
    }
    setShowAll(!showAll);
  };

  useEffect(() => {
    const data = {
      incubation_years: selectedYears,
      cohort_months:selectedMonths,
      sectors:selectedSectors
    }
    axios.post(API_BASE_URL+"/get-projects", data)
      .then(response => {
        // Handle successful API response
        setProjects(response.data);
      })
      .catch(error => {
        // Handle error cases
        console.error('Error making API call:', error);
      });
    // console.log("year", selectedYears);
  }, [selectedYears]);

  useEffect(() => {
    const data = {
      incubation_years: selectedYears,
      cohort_months:selectedMonths,
      sectors:selectedSectors
    }
    axios.post(API_BASE_URL+"/get-projects", data)
      .then(response => {
        // Handle successful API response
        setProjects(response.data);
      })
      .catch(error => {
        // Handle error cases
        console.error('Error making API call:', error);
      });
    // console.log("months", selectedMonths);
  }, [selectedMonths]);

  useEffect(() => {
    const data = {
      incubation_years: selectedYears,
      cohort_months:selectedMonths,
      sectors:selectedSectors
    }
    axios.post(API_BASE_URL+"/get-projects", data)
      .then(response => {
        // Handle successful API response
        setProjects(response.data);
      })
      .catch(error => {
        // Handle error cases
        console.error('Error making API call:', error);
      });
    // console.log("sector", selectedSectors);
  }, [selectedSectors]);

  // work with startups
  useEffect(() => {
    const data = {
      role: selectedRole,
      remuneration:selectedRemuneration,
      sectors:selectedSectors2
    }
    axios.post(API_BASE_URL+"/get-jobs", data)
      .then(response => {
        // Handle successful API response
        setJobs(response.data);
      })
      .catch(error => {
        // Handle error cases
        console.error('Error making API call:', error);
      });
    // console.log("role", selectedRole);
  }, [selectedRole]);

  useEffect(() => {
    const data = {
      role: selectedRole,
      remuneration:selectedRemuneration,
      sectors:selectedSectors2
    }
    axios.post(API_BASE_URL+"/get-jobs", data)
      .then(response => {
        // Handle successful API response
        setJobs(response.data);
      })
      .catch(error => {
        // Handle error cases
        console.error('Error making API call:', error);
      });
    // console.log("remuneration", selectedRemuneration);
  }, [selectedRemuneration]);

  useEffect(() => {
    const data = {
      role: selectedRole,
      remuneration:selectedRemuneration,
      sectors:selectedSectors2
    }
    axios.post(API_BASE_URL+"/get-jobs", data)
      .then(response => {
        // Handle successful API response
        setJobs(response.data);
      })
      .catch(error => {
        // Handle error cases
        console.error('Error making API call:', error);
      });
    // console.log("sector2", selectedSectors2);
  }, [selectedSectors2]);

  const handleReset = () => {
    setSelectedYears([]);
    setSelectedMonths([]);
    setSelectedSectors([]);
  };

  const handleReset2 = () => {
    setSelectedRemuneration([]);
    setSelectedRole([]);
    setSelectedSectors2([]);
  };

  return (
    <motion.div
      initial={{ opacity: 0 }}
      whileInView={{ opacity: 1 }}
      transition={{ duration: 1 }}
      exit={{ opacity: 1 }}
      className="checkbox-outer-div">
      <div className="checkbox-inner-div">
    
        <div className="checbox-heading-wrapper">
          <div className="filter-by">Filter by</div>
          {years ? (
            <div className="reset" onClick={handleReset}>
              Reset
            </div>
          ) : null}

          {roles ? (
            <div className="reset" onClick={handleReset2}>
              Reset
            </div>
          ) : null}
        </div>
        <img src={hcLine} className="checkbox-hLine" />
        <div className="checkbox-form">
          <Form>
            <Form.Group>
              <Form.Label className="common-heading-style year-margin">
                {Title1}
              </Form.Label>
              {years ? (
                <div className="common-form-gap">
                  {years.map((yearObj) => (
                    <Form.Check
                      key={yearObj.id}
                      type="checkbox"
                      label={yearObj.id}
                      id={yearObj.id}
                      value={yearObj.year}
                      checked={selectedYears.includes(yearObj.year)}
                      onChange={(e) => handleCheckboxChange(e, "years")}
                      className="custom-label-font-size"
                    />
                  ))}
                </div>
              ) : null}
              {roles ? (
                <div className="common-form-gap">
                  {visibleRoles.map((roleObj) => (
                    <Form.Check
                      key={roleObj.id}
                      type="checkbox"
                      label={roleObj.role}
                      id={roleObj.id}
                      value={roleObj.role}
                      checked={selectedRole.includes(roleObj.role)}
                      onChange={(e) => handleCheckboxChange2(e, "roles")}
                      className="custom-label-font-size"
                    />
                  ))}
                  {roles.length > initialVisibleRoles && (
                    <div onClick={handleViewMoreClick} className="view-more">
                      {showAll ? "View Less " : "View More"}
                    </div>
                  )}
                </div>
              ) : null}
            </Form.Group>

            <Form.Group>
              <Form.Label className="common-heading-style">{Title2}</Form.Label>
              {months ? (
                <div className="common-form-gap">
                  {months.map((monthObj) => (
                    <Form.Check
                      key={monthObj.id}
                      type="checkbox"
                      label={monthObj.month}
                      id={monthObj.id}
                      value={monthObj.month}
                      checked={selectedMonths.includes(monthObj.month)}
                      onChange={(e) => handleCheckboxChange(e, "months")}
                      className="custom-label-font-size"
                    />
                  ))}
                </div>
              ) : null}

              {Remunerations ? (
                <div className="common-form-gap">
                  {Remunerations.map((RemunerationObj) => (
                    <Form.Check
                      key={RemunerationObj.id}
                      type="checkbox"
                      label={RemunerationObj.remuneration}
                      id={RemunerationObj.id}
                      value={RemunerationObj.remuneration}
                      checked={selectedRemuneration.includes(
                        RemunerationObj.remuneration
                      )}
                      onChange={(e) =>
                        handleCheckboxChange2(e, "remunerations")
                      }
                      className="custom-label-font-size"
                    />
                  ))}
                </div>
              ) : null}
            </Form.Group>

            <Form.Group>
              <Form.Label className="common-heading-style">Sector</Form.Label>
              {sectors ? (
                <div>
                  {sectors.map((sectorObj) => (
                    <Form.Check
                      key={sectorObj.id}
                      type="checkbox"
                      label={sectorObj.sector}
                      id={sectorObj.id}
                      value={sectorObj.sector}
                      checked={selectedSectors.includes(sectorObj.sector)}
                      onChange={(e) => handleCheckboxChange(e, "sectors")}
                      className="custom-label-font-size"
                    />
                  ))}
                </div>
              ) : null}

              {sectors2 ? (
                <div>
                  {sectors2.map((sector2Obj) => (
                    <Form.Check
                      key={sector2Obj.id}
                      type="checkbox"
                      label={sector2Obj.sector}
                      id={sector2Obj.id}
                      value={sector2Obj.sector}
                      checked={selectedSectors2.includes(sector2Obj.sector)}
                      onChange={(e) => handleCheckboxChange2(e, "sectors2")}
                      className="custom-label-font-size"
                    />
                  ))}
                </div>
              ) : null}
            </Form.Group>
          </Form>
        </div>
      </div>
    </motion.div>
  );
}

export default CheckBox;
