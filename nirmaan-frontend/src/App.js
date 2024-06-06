import { BrowserRouter as Router, Route, Routes } from "react-router-dom";

import Home from "./Pages/Home";
import InnerStartUp1 from "./Pages/inner-pages/InnerStartUp";
import TeamsComp from "../src/Pages/inner-pages/Teams";
import AboutComp from "./Pages/inner-pages/AboutUs";
import AboutInteraction from "./Pages/inner-pages/AboutInteraction";
import StartupsComp from "../src/Pages/inner-pages/StartUps";
import Media from "./Pages/inner-pages/Media";
import BlogsComp from "./Pages/inner-pages/InnerStartUp";
import InteractionComp from "./Pages/inner-pages/StartUpInteraction1";
import WWStartUps from "./Pages/inner-pages/WorkWithStartUp";
import InnertartUp2 from "./Pages/inner-pages/InnerStartUp2";
import HomeTest from "./Pages/HomeTest";

function App() {
  return (
    <>
      <Routes>
        <Route path="/" element={<Home />} />
        {/* <Route path="/teams" element={<TeamsComp />} />
        <Route path="/about-us" element={<AboutComp />} /> */}
        <Route path="/timelines" element={<AboutInteraction />} />
        <Route path="/join-us" element={<StartupsComp />} />
        <Route path="/media" element={<Media />} />
        <Route path="/blog" element={<BlogsComp />} />
        <Route path="/projects" element={<InteractionComp />} />
        <Route path="/work-with-start-ups" element={<WWStartUps />} />
        <Route path="/inner-start-up" element={<InnerStartUp1 />} />
      </Routes>
    </>
  );
}
export default App;