import React from "react";

import "../../Pages/sub-components/thirdPageSubComp.css";

function ThirdPageSubComp({ image, heading, content }) {
  return (
    <div className="sub-comp">
      <div className="green-div">
        <img src={image} className="rotate-image" />
      </div>
      <div className="heading-content">
        <div className="_heading">{heading}</div>
        <p className="_content">{content}</p>
      </div>
    </div>
  );
}

export default ThirdPageSubComp;
