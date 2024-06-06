import React, { useRef, useEffect, useState } from "react";
import "./timeline.css";

import chessImg from "../../../images/chess.png";
import hLine from "../../../images/hLine.png";
import vLine from "../../../images/vLine.png";
import gsap from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

import aboutVectLeft from "../../../images/teamsVectLeft.png";
import { motion } from "framer-motion";
gsap.registerPlugin(ScrollTrigger);

const timelinesData = [
  {
    id: 0,
    year: 2008,
    subtitle: "Subtitle",
    content:
      "Nirmaan, The Pre-incubator, IIT Madras, aims to provide the experience of Entrepreneurship to the student community. NIRMAAN acts as a sandbox for aspiring entrepreneurs of IIT Madras to practice the highs and lows of entrepreneurship with a deferred placement. We strive to offer our students a firsthand experience of what it takes to be an entrepreneur.",
    imgUrl: chessImg,
  },
  {
    id: 1,
    year: 2011,
    subtitle: "Subtitle",
    content:
      "Nirmaan, The Pre-incubator, IIT Madras, aims to provide the experience of Entrepreneurship to the student community. NIRMAAN acts as a sandbox for aspiring entrepreneurs of IIT Madras to practice the highs and lows of entrepreneurship with a deferred placement. We strive to offer our students a firsthand experience of what it takes to be an entrepreneur.",
    imgUrl: chessImg,
  },
  {
    id: 2,
    year: 2015,
    subtitle: "Subtitle",
    content:
      "Nirmaan, The Pre-incubator, IIT Madras, aims to provide the experience of Entrepreneurship to the student community. NIRMAAN acts as a sandbox for aspiring entrepreneurs of IIT Madras to practice the highs and lows of entrepreneurship with a deferred placement. We strive to offer our students a firsthand experience of what it takes to be an entrepreneur.",
    imgUrl: chessImg,
  },
  {
    id: 3,
    year: 2021,
    subtitle: "Subtitle",
    content:
      "Nirmaan, The Pre-incubator, IIT Madras, aims to provide the experience of Entrepreneurship to the student community. NIRMAAN acts as a sandbox for aspiring entrepreneurs of IIT Madras to practice the highs and lows of entrepreneurship with a deferred placement. We strive to offer our students a firsthand experience of what it takes to be an entrepreneur.",
    imgUrl: chessImg,
  },
  {
    id: 4,
    year: 2023,
    subtitle: "Subtitle",
    content:
      "Nirmaan, The Pre-incubator, IIT Madras, aims to provide the experience of Entrepreneurship to the student community. NIRMAAN acts as a sandbox for aspiring entrepreneurs of IIT Madras to practice the highs and lows of entrepreneurship with a deferred placement. We strive to offer our students a firsthand experience of what it takes to be an entrepreneur.",
    imgUrl: chessImg,
  },
];

function TimeLine() {
  const [activeTimeline, setActiveTimeline] = useState(0);
  const [isScrollingDown, setIsScrollingDown] = useState(false);
  const slowScrollSectionRef = useRef(null);
  const timelineSectionRef = useRef(null);
  const [isTimelineInView, setIsTimelineInView] = useState(false);
  const [translateY, setTranslateY] = useState(0);
  const [imageHeights, setImageHeights] = useState([]);
  const [isMobile, setIsMobile] = useState(window.innerWidth <= 768);
  const [scrollingTimeout, setScrollingTimeout] = useState(null);

  useEffect(() => {
    const handleResize = () => {
      setIsMobile(window.innerWidth <= 768);
    };

    window.addEventListener("resize", handleResize);

    return () => {
      window.removeEventListener("resize", handleResize);
    };
  }, []);

  const handleImageLoad = (e, index) => {
    const imgHeight = e.target.naturalHeight;
    setImageHeights((prevHeights) => {
      const newHeights = [...prevHeights];
      newHeights[index] = imgHeight;
      return newHeights;
    });
  };

  const handleIntersection = (entries) => {
    const [entry] = entries;
    setIsTimelineInView(entry.isIntersecting);
  };

  useEffect(() => {

    if (isMobile) return;
    let currentIndex = 0;
    const timeLines = document.querySelectorAll(".timeline-content");
    const timeLinesGsap = gsap.utils.toArray(timeLines);
    const timeLineContents = document.querySelectorAll(".a-content");
    const timeLineContentsGsap = gsap.utils.toArray(timeLineContents);
    const containerHeight = document.querySelector(".timeline").clientHeight;

    ScrollTrigger.create({
      trigger: slowScrollSectionRef.current,
      start: "top",
      end: `+=${containerHeight}`,
    });

    const handleUpdate = (index) => {
      currentIndex = index;

      gsap.to(timeLineContentsGsap, {
        opacity: 0,
        height: 0,
        visibility: "hidden",
        ease: "Power4.inOut",
      });

      gsap.to(timeLineContentsGsap[currentIndex], {
        opacity: 1,
        visibility: "visible",
        height: 250,
        ease: "Power4.inOut",
        onStart: () => setActiveTimeline(index),
      });
    };

    timeLinesGsap.forEach((timeline, index) =>
      ScrollTrigger.create({
        trigger: timeline,
        start: "top center",
        end: `+=${timeline.clientHeight}`,
        onEnter: () => handleUpdate(index),
        onEnterBack: () => handleUpdate(index),
      })
    );

    const options = {
      root: null,
      rootMargin: "0px",
      threshold: 0.5,
    };

    const observer = new IntersectionObserver(handleIntersection, options);

    if (timelineSectionRef.current) {
      observer.observe(timelineSectionRef.current);
    }

    return () => {
      observer.disconnect();
    };
  }, []);

  const changeActiveTimelineWithDelay = (index) => {
    clearTimeout(scrollingTimeout);
    const timeout = setTimeout(() => {
      setActiveTimeline(index);
    }, 1000);
    setScrollingTimeout(timeout);
  };

  const handleScrollInView = (e) => {
    if (isTimelineInView) {
      const activeTimeline = document.querySelector(".activeTimeline");

      function getDistanceFromTop(element) {
        const elementRect = element.getBoundingClientRect();
        const distanceFromTop = elementRect.top;
        return distanceFromTop;
      }

      const distanceFromBottom = getDistanceFromTop(activeTimeline);

      if (distanceFromBottom > translateY || e.deltaY > 0) {
        setIsScrollingDown(true);
        changeActiveTimelineWithDelay((prev) => (prev === 4 ? prev : prev + 1));
      } else {
        setIsScrollingDown(false);
        changeActiveTimelineWithDelay((prev) => (prev === 0 ? prev : prev - 1));
      }
    }
  };

  useEffect(() => {
    const activeTab = document.querySelector(".activeTimeline");
    const container = document.querySelector(".timeline .timeline-right");

    setTimeout(() => {
      const activeTabRect = activeTab.getBoundingClientRect();
      const containerRect = container.getBoundingClientRect();

      let distanceToTop;

      if (isScrollingDown) {
        distanceToTop = activeTabRect.top + activeTabRect.height / 2 - containerRect.top;
      } else {
        distanceToTop = activeTabRect.top - containerRect.top;
      }

      setTranslateY(distanceToTop);
    }, 100);

    return () => { };
  }, [activeTimeline, isScrollingDown]);

  const handleActiveTimeLineMobilde = (index) => {
    setActiveTimeline(index);
  }

  return (
    <div
      className={`timeline ${isMobile ? "timeline--mobile" : ""}`}
      ref={timelineSectionRef}
      style={{ backgroundImage: `url(${aboutVectLeft})` }}
    >
      {!isMobile && (
        <div className="chess-hv">
          {timelinesData.map((timeline, index) => {
            if (index === activeTimeline) {
              return (
                <img
                  key={index}
                  src={timeline.imgUrl}
                  className="c-img"
                  style={{
                    transform: `translateY(${translateY - imageHeights[index] / 2}px)`,
                  }}
                  onLoad={(e) => handleImageLoad(e, index)}
                />
              );
            }
            return null;
          })}
        </div>
      )}

      <div className="timeline-right" ref={slowScrollSectionRef}>
        {!isMobile && (
          <img
            src={hLine}
            className="h-line"
            style={{ top: `${translateY}px` }}
          />
        )}
        <img src={vLine} className="v-line" />

        {timelinesData.map((timeline, index) => (
          <div className="timeline-content" key={index}>
            <div className="a-title" onClick={() => {
              if (isMobile) {
                handleActiveTimeLineMobilde(index)
              }
            }}>
              {timeline.year} - {timeline.subtitle}
            </div>
            <motion.div
              className={`a-content ${activeTimeline === index ? "activeTimeline" : ""
                }`}
              animate={{
                height: activeTimeline === index ? "auto" : "0px",
              }}
            >
              {timeline.content}
              {isMobile && (
                <div className="timeline-content__img-box">
                  <img src={timeline.imgUrl} alt="" />
                </div>
              )}
            </motion.div>
          </div>
        ))}
      </div>
    </div>
  );
}

export default TimeLine;