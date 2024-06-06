import React, { useEffect, useState, useRef } from "react";

import "./homeFirstPage.css";
import nirmaanLogo from "../images/NIRMAAN-LOGO-NEW 1.png";
import iitMadrasLogo from "../images/iitmLogo.png";
import SocialMediaIcons from "./SocialMediaIcons";
import rect from "../images/Rectangle.png";
import vect from "../images/Vector.png";
import thisIsImg from "../images/THIS IS.png";
import API_BASE_URL from "../config";


function HomeFirstPage() {
  const handleClickApplyTo = () => {
    window.location.href = "/join-us";
  };



  // useEffect(() => {
  //   // Get a reference to the scrollable container div
  //   const scrollableContainer = document.querySelector(".inner-div-fp__wrapper");

  //   // Calculate the duration based on the content width and desired speed
  //   const contentWidth = scrollableContainer.scrollWidth;
  //   const speed = 50; // Adjust the speed as needed

  //   // Create a function to animate the scroll to the right
  //   function animateScroll() {
  //     const scrollLeft = scrollableContainer.scrollLeft;
  //     const newScrollLeft = scrollLeft + 1; // Adjust the scroll speed

  //     // Check if we've reached the end
  //     if (newScrollLeft >= contentWidth) {
  //       scrollableContainer.scrollLeft = 0; // Reset to the beginning
  //     } else {
  //       scrollableContainer.scrollLeft = newScrollLeft;
  //     }

  //     // Request the next animation frame
  //     requestAnimationFrame(animateScroll);
  //   }

  //   // Start the animation
  //   animateScroll();

  // }, [])

  useEffect(() => {
    // Get a reference to the scrollable container div
    const scrollableContainer = document.querySelector(".inner-div-fp__wrapper");
  
    // Calculate the duration based on the content width and desired speed
    const contentWidth = scrollableContainer.scrollWidth;
    const speed = 5; // Adjust the speed as needed
  
    let scrollPosition = 0; // Initial scroll position
    let scrollDirection = 1; // Initial scroll direction (1 for right, -1 for left)
  
    // Create a function to animate the scroll
    function animateScroll() {
      // Update the scroll position
      scrollPosition += speed * scrollDirection;
  
      // Check if we've reached either end
      if (scrollPosition >= contentWidth) {
        // Change the scroll direction to left
        scrollDirection = -1;
      } else if (scrollPosition <= 0) {
        // Change the scroll direction to right
        scrollDirection = 1;
      }
  
      // Set the scroll position
      scrollableContainer.scrollLeft = scrollPosition;
  
      // Request the next animation frame
      requestAnimationFrame(animateScroll);
    }
  
    animateScroll();
   
  }, []);
  const [events, setEvents] = useState([]);
  useEffect(() => {
    // Fetch users from Laravel API
    fetch(API_BASE_URL+'/events')
      .then((response) => response.json())
      .then((data) => setEvents(data))
      .catch((error) => console.error(error));
  }, []);
  
 
  
  
  
  return (
    <div className="full-page-container">
      <div className="vertical">WHO WE ARE</div>
      {/* nirman logo */}

      <div className="nirmaan-logo">
        <div className="this-is-img">
          <img src={thisIsImg} />
        </div>
        <div className="logo">
          <img src={nirmaanLogo} />
        </div>
        <div className="text subtitle">
          {/* <div className="sub-heading-first">
            <div className="subtitle-styling-fp">THIS IS YOUR SUBTITLE</div>
          </div> */}
          <div className="iitmlogo home-desctop">
            <img src={iitMadrasLogo} />
          </div>
          <div className="homepage-mobile">
            <div className="this-is-img mobile-this-is">
              <img src={thisIsImg} />
            </div>
            {/* <h3 className="home-center-title home-laptop">
              NIRMAAN IIT MADRAS
            </h3> */}
          </div>
          <div className="subtitle-content">
           The country's first dedicated pre-incubator on a college campus
          </div>
        </div>
      </div>

      {/* iit madras logo  */}
      <div className="iitmlogo home-laptop">
        <img src={iitMadrasLogo} />
      </div>

      <h3 className="home-center-title home-desctop">
        The Pre-Incubator
      </h3>

      {/* social media  */}
      <div className="social-icons-first">
        <SocialMediaIcons />
      </div>

      <button className="apply mobile-apply" onClick={handleClickApplyTo}>
        Engage with us?
      </button>

      {/* footer  */}
      <div className="first-page-footer">
        <div className="vect">
          <img src={vect} />
        </div>
        <div className="rect">
          <div>
            <img src={rect} />
          </div>
        </div>

      </div>
      <div className="inner-div-fp">
        <div className="inner-div-fp__wrapper" >
          <div className="inner-list-div">
            {events.map((new_event)=>{
              return (
                <div className="inner-list-div__fourth">{new_event.event_name} {new_event.date}</div>
              )
            })}
            {/* <div className="inner-list-div__first">Nirmaan Studends Head Applications Opens on January 23rd</div>
            <div className="inner-list-div__second">January Cohort Application opens on 13th January</div>
            <div className="inner-list-div__third">Experts Talk 3.0 February 4th</div>
            <div className="inner-list-div__fourth">Mega Event February 24th and 25th</div> */}
            <div className="inner-list-div__fifth" id="last-list">OUR MOST <span className="item-align-right">RECENT EVENTS</span></div>
          </div>
          <button className="apply" onClick={handleClickApplyTo}>
          Engage with us?
          </button>
        </div>
      </div>
    </div>
  );
}

export default HomeFirstPage;
