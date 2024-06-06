import React, { useState, useEffect, useRef } from "react";
import { motion, useScroll, useTransform } from "framer-motion";
import "./homeFirstPage.css";
import "./homeSecondPage.css";
import "./homeThirdPage.css";
import "./homeFourthPage.css";
import "./st.css";
import HomeFirstPage from "./HomeFirstPage";
import HomeSecondPage from "./HomeSecondPage";
import HomeThirdPage from "./HomeThirdPage";
import HomeFourthPage from "./HomeFourthPage";
import HomeFifthPage from "./HomeFifthPage";
import HomeSixthPage from "./HomeSixthPage";
import HomeSeventhPage from "./HomeSeventhPage";
import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import ScrollToPlugin from "gsap/ScrollToPlugin";

gsap.registerPlugin(ScrollTrigger);

function Home() {
  const [isMobile, setIsMobile] = useState(window.innerWidth < 1000);
  const containerRef = useRef(null); // ref to the main container
  const thirdPageRef = useRef(null); // ref to the third component
  const sectionsRef = useRef([]); // ref to array of all sections

  useEffect(() => {
    const container = containerRef.current; // current element of main container
    const sections = sectionsRef.current; // current array of all sections
    const thirdPage = thirdPageRef.current; // current element of the third component

    const initializeAnimation = () => {
      console.log(window.innerHeight);
      const tl = gsap.timeline({
        scrollTrigger: {
          trigger: container,
          pin: true,
          // snap: 1 / (7 - 1),
          start: "top top",
          end: () => "+=" + (container.scrollWidth - window.innerWidth),
          scrub: 0.3,
        },
      });

      tl.to(container, {
        x: `-${thirdPage.offsetLeft}px`,
        ease: "none",
      })
        .to(thirdPage, {
          y: () =>
            `-${
              window.innerHeight
              // + window.innerHeight/2
            }px`,
          ease: "power1.inOut",
        })
        .set(thirdPage, { autoAlpha: 0 })
        .to(
          sections,
          {
            x: () =>
              `-${
                container.scrollWidth - window.innerWidth - thirdPage.offsetLeft
              }px`,
            ease: "none",
            immediateRender: false,
          },
          "+=0"
        ) // adjust the timing here
        .set(thirdPage, { autoAlpha: 1 }, "<");
    };

    // return // for testing ppss
    if (isMobile) return; // if mobile device, then return

    window.addEventListener("load", initializeAnimation); // initialization of animation on page load

    return () => {
      window.removeEventListener("load", initializeAnimation); // clearing event worker on unmount of the component
    };
  }, []);

  const addRef = (el) => {
    sectionsRef.current.push(el); // function for adding ref on each component in the array sectionsRef
  };

  // return <div className="homeFirstPage"><HomeFirstPage /></div>

  return isMobile ? (
    <>
      <div className="homeFirstPage">
        <HomeFirstPage />
      </div>
      <div className="homeSecondPage">
        <HomeSecondPage />
      </div>
      <div className="homeThirdPage">
        <HomeThirdPage />
      </div>
      <div className="homeFourthPage">
        <HomeFourthPage />
      </div>
      <div className="homeFifthPage">
        <HomeFifthPage />
      </div>
      <div className="homeSixthPage">
        <HomeSixthPage />
      </div>
      <div className="homeSeventhPage">
        <HomeSeventhPage />
      </div>
    </>
  ) : (
    <div className="container" ref={containerRef}>
      <div className="panel homeFirstPage" ref={addRef}>
        <HomeFirstPage />
      </div>
      <div className="panel homeSecondPage" ref={addRef}>
        <HomeSecondPage />
      </div>
      <div className="panel homeThirdPage" ref={thirdPageRef}>
        <HomeThirdPage />
      </div>
      <div className="panel homeFourthPage" ref={addRef}>
        <HomeFourthPage />
      </div>
      <div
        className="panel homeFifthPage"
        style={{ height: "150vh" }}
        ref={addRef}
      >
        <HomeFifthPage />
      </div>
      <div className="panel homeSixthPage" ref={addRef}>
        <HomeSixthPage />
      </div>
      <div className="panel homeSeventhPage" ref={addRef}>
        <HomeSeventhPage />
      </div>
    </div>
  );
}

export default Home;
