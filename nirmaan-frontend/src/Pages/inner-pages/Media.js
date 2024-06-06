import React, { useState, useEffect } from 'react';
import { motion } from "framer-motion";
import "./media.css";
import NavBar from "./NavBar";
import Footer from "../Footer";
import TeamSubCompTitle from "../inner-pages/inner-sub-compoents.js/TeamSubCompTitle";
import MediaSubComp from "./inner-sub-compoents.js/MediaSubComp";
import API_BASE_URL from '../../config';

function Media() {
  const [media, setMedia] = useState([]);

  useEffect(() => {
    // Fetch Media from Laravel API
    fetch(API_BASE_URL+'/media')
      .then((response) => response.json())
      .then((data) => setMedia(data))
      .catch((error) => console.error(error));
  }, []);
  return (
    <>
      <NavBar />
      <div className="media-nav">
        <TeamSubCompTitle MediaSubtitle="SEE OUR" topic="GALLERY" />
        <motion.div
          initial={{ opacity: 0 }}
          whileInView={{ opacity: 1 }}
          transition={{ duration: 1 }}
          exit={{ opacity: 1 }}
          className="media-list">
          <div>
            <a href="#gallery">Gallery</a>
          </div>
          <div>
            <a href="#events">Events</a>
          </div>
          <div>
            <a href="#team">Team</a>
          </div>
          <div>
            <a href="#product">Products</a>
          </div>
          <div className="nir-you">
            <a href="https://www.youtube.com/channel/UCqXpedHH46Y5_x-7MNY6nCw">
              Nirman<br></br>Youtube
            </a>
          </div>
        </motion.div>
      </div>
      <div className="media-sub-comp">
        <MediaSubComp 
        imgArray={media[0]}
        />
      </div>
      <div id="events">
        <TeamSubCompTitle MediaSubtitle="SEE OUR" topic="EVENTS" />
      </div>
      <div className="media-sub-comp">
        <MediaSubComp 
        imgArray={media[1]}
        />
      </div>

      <div id="team">
        <TeamSubCompTitle MediaSubtitle="SEE OUR" topic="TEAM" />
      </div>
      <div className="media-sub-comp">
        <MediaSubComp
        imgArray={media[2]}
         />
        
      </div>
      <Footer />
    </>
  );
}

export default Media;
