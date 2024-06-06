import React from 'react'
import './highlights.css'

function Highlights({title, description,modificator}) {
  return (
    <div className={`highlights ${modificator}`}>
      <h3 className='highlights__title'>{title}</h3>
      <p className='highlights__description'>{description}</p>
    </div>
  )
}

export default Highlights