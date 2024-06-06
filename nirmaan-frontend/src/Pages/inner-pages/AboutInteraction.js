import React, {useState, useEffect} from "react";

import NavBar from "./NavBar";
import Footer from "../Footer";
import About from "./About";
import API_BASE_URL from "../../config";

function AboutInteraction() {
  const [stats, setStats] = useState([]);
  useEffect(() => {
    // Fetch stats from Laravel API
    fetch(API_BASE_URL+'/about_stats')
      .then((response) => response.json())
      .then((data) => setStats(data))
      .catch((error) => console.error(error));
  }, []);
  return (
    <div>
      <NavBar />
      <About stats={stats}/>
      <Footer />
    </div>
  );
}

export default AboutInteraction;
