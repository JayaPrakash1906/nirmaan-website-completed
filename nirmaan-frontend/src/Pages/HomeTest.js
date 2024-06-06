import React, { useState, useEffect, useRef } from "react";
import { motion, useScroll, useTransform } from "framer-motion";
import "./homeFirstPage.css";
import "./homeSecondPage.css";
import "./homeThirdPage.css";
import "./homeFourthPage.css";


function Home() {
  const [currentPage, setCurrentPage] = useState(0);
  const [isScrolling, setIsScrolling] = useState(false);
  const pages = 7;
  const targetRef = useRef(null);
  const { scrollYProgress } = useScroll({
    target: targetRef,
  })


  const x = useTransform(scrollYProgress, [0, 2], ["10%", "-95%"])
  console.log('scrollProgress', scrollYProgress, x)

  useEffect(() => {

    const stickySections = [...document.querySelectorAll('.sticky')];
    
    function transform(section) {
      const offsetTop = section.parentElement.offsetTop;
      const scrollSection = section.querySelector('.scroll_section');
      let percentage = ((window.scrollY - offsetTop) / window.innerHeight) * 100;
      percentage = percentage < 0 ? 0 : percentage > 400 ? 400 : percentage;
      console.log('scrollSection', scrollSection)
      scrollSection.style.transform = `translate3d(${-(percentage)}vw, 0, 0)`;
    }

    window.addEventListener('scroll', (e) => {
      for (let i = 0; i < stickySections.length; i++) {
        transform(stickySections[i])
      }
    })

    return () => {

    }
  }, [])


  return (
    <main>
      {/* <section className="section-hybrid">
        <div className="container-hybrid">
          <h1>Hybrid scroll</h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem distinctio ut aspernatur ullam voluptatum harum a placeat voluptates incidunt temporibus.</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem distinctio ut aspernatur ullam voluptatum harum a placeat voluptates incidunt temporibus.</p>
        </div>
      </section> */}

      <div className="sticky_parent">
        <div className="sticky">
          <div className="scroll_section">
            <div className="img">1</div>
            <div className="img">2</div>
            <div className="img">3</div>
            <div className="img">4</div>
            <div className="img">5</div>
          </div>
        </div>
      </div>

      <section className="section-hybrid">
        <div className="container-hybrid">
          <h1>About section</h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem distinctio ut aspernatur ullam voluptatum harum a placeat voluptates incidunt temporibus.</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem distinctio ut aspernatur ullam voluptatum harum a placeat voluptates incidunt temporibus.</p>
        </div>
      </section>

      <div className="sticky_parent">
        <div className="sticky">
          <div className="scroll_section">
            <div className="img">1</div>
            <div className="img">2</div>
            <div className="img">3</div>
            <div className="img">4</div>
            <div className="img">5</div>
          </div>
        </div>
      </div>

      <section className="section-hybrid">
        <div className="container-hybrid">
          <h1>End section</h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem distinctio ut aspernatur ullam voluptatum harum a placeat voluptates incidunt temporibus.</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem distinctio ut aspernatur ullam voluptatum harum a placeat voluptates incidunt temporibus.</p>
        </div>
      </section>

    </main>
  );

}

export default Home;
