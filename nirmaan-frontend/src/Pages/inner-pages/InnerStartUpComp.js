import React from "react";
import { motion } from "framer-motion";
import "./innerStartUp.css";
import linkedIn from "../../images/XMLID_801_ (1).png";
import img from "../../images/innerStartUpImg.png";
import mail from "../../images/mail-nir-2.png";
import TeamSubCompTitle from "./inner-sub-compoents.js/TeamSubCompTitle";
import MediaSubComp from "./inner-sub-compoents.js/MediaSubComp";
import API_BASE_URL from "../../config";

function InnerStartUpComp({
  content,
  title,
  projectName,
  teamMembers,
  subTitle,
  name,
  inr,
  project
}) {
  return (
    <div

      className="is-main mb-2">
      <div className="is-sub-main">
        <div className="is-sub-left">
          <motion.div
            initial={{ opacity: 0 }}
            whileInView={{ opacity: 1 }}
            transition={{ duration: 1 }}
            exit={{ opacity: 1 }}
            className="is-left-first-heading">
            <div className="is-left-first-sub-heading">{title}</div>
            <div className="is-left-second-sub-heading">{projectName}</div>
          </motion.div>
          <motion.div
            initial={{ opacity: 0 }}
            whileInView={{ opacity: 1 }}
            transition={{ duration: 1 }}
            exit={{ opacity: 1 }}
            className="is-content margin bottom-30">{content}</motion.div>
          <motion.div
            initial={{ opacity: 0 }}
            whileInView={{ opacity: 1 }}
            transition={{ duration: 1 }}
            exit={{ opacity: 1 }}
            className="is-member-main">
            <div className="is-member-heading">MEMBERS OF THIS PROJECT</div>
            <div className="is-members-name">
              {project.members_name.split(",").map((item,index) => (
                <div key={index} className="is-name-wrapper">
                  <div className="is-name">{item}</div>
                  <div>
                    <a href={project.members_linkedin.split(",")[index]}>
                      <img src={linkedIn} />
                    </a>
                  </div>
                </div>
              ))}

            </div>
          </motion.div>
        </div>
        <motion.div
          initial={{ opacity: 0 }}
          whileInView={{ opacity: 1 }}
          transition={{ duration: 1 }}
          exit={{ opacity: 1 }}
          className="is-sub-right">
          <div className="name-startup">
            <div className="startup-title-is">{subTitle}</div>
            <div className="start-main-name">{name}</div>
          </div>
          <img src={API_BASE_URL+'/images/'+project.description_photo} className="is-image" />
          {/* <div className="funds-raised">
            <div className="inr">{inr}</div>
            <div className="funds-heading">Funds Raised</div>
          </div> */}
        </motion.div>
      </div>

      {/* contact us  */}
      {/* <motion.div
        initial={{ opacity: 0 }}
        whileInView={{ opacity: 1 }}
        transition={{ duration: 1 }}
        exit={{ opacity: 1 }}
        className="contact-section">
        <div className="contact-is">
          <div className="contact-us-is">CONTACT US</div>
        </div>
        <div className="contact-details">
          <div className="contact-div-1">
            <div className="mail-img">
              <img src={mail} />
            </div>
            <span className="mail-id">nirmaan@smail.iitm.ac.in</span>
          </div>
          <div className="contact-div-2">
            <a href="https://www.iitm.ac.in/" style={{color: "black"}}>iitm.ac.in</a>
          </div>
          <div className="contact-div-3">
            <a href="https://www.linkedin.com">
              <img src={linkedIn} />
            </a>
          </div>
        </div>
      </motion.div> */}
      {/* <TeamSubCompTitle MediaSubtitle="STARTUP" topic="GALLERY" />
      <div className="gallery-comp">
        {/* <MediaSubComp imgArray={[project.photo_1,project.photo_2,project.photo_3,project.photo_4,project.photo_5,project.photo_6]}/> *
        <MediaSubComp imgArray={[project.photo_4]}/>
      </div> */}
    </div>
  );
}

export default InnerStartUpComp;
