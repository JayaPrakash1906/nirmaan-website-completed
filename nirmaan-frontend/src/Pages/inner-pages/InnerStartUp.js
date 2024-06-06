import React from "react";

import "./innerStartUp.css";
import NavBar from "./NavBar";
import Footer from "../Footer";
import InnerStartUpComp from "./InnerStartUpComp";
import { useLocation } from "react-router-dom";

function InnerStartUp() {
  const location = useLocation();
  const project = location.state.project;

  return (
    <>
      <NavBar />
      <InnerStartUpComp
        content={project.description}
        title={project.sector}
        projectName={project.project_name}
        // subTitle="Lorem Ipsum"
        name={project.start_up_name}
        project = {project}
        // inr="INR 20 Cr"
      />
      <Footer />
    </>
  );
}

export default InnerStartUp;
