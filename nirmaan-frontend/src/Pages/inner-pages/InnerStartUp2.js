import React from "react";

import InnerStartUpComp from "./InnerStartUpComp";
import NavBar from "./NavBar";
import Footer from "../Footer";

function InnerStartUp2() {
  const teamMembers = [
    { name: "Sanjay Krishnan", link: "sanjay-profile-link" },
    { name: "Siraj Valeti", link: "siraj-profile-link" },
    { name: "Pranav Singh", link: "pranav-profile-link" },
    { name: "Teja S", link: "teja-profile-link" },
  ];
  return (
    <div>
      <NavBar />
      <InnerStartUpComp
        content="Nirmaan, The Pre-incubator, IIT Madras, aims to provide the
            experience of Entrepreneurship to the student community. NIRMAAN
            acts as a sandbox for aspiring entrepreneurs of IIT Madras to
            practice the highs and lows of entrepreneurship with a deferred
            placement. We strive to offer our students a firsthand experience of
            what it takes to be an entrepreneur."
        title="Edtech"
        projectName="PROJECT NAME"
        teamMembers={teamMembers}
        subTitle="Lorem Ipsum"
        name="Akshar"
        // inr="INR 80 Cr"
      />
      <Footer />
    </div>
  );
}

export default InnerStartUp2;
