import React, { useState, useRef, useEffect } from "react";
import { motion } from "framer-motion";
import "./searchBar.css";
import search from "../../../images/search 1.png";

function SearchBar({ onSearch, searchTerm, setSearchTerm }) {
  const searchContainerRef = useRef(null);

  useEffect(() => {
    const handleClickOutside = (event) => {
      if (
        searchContainerRef.current &&
        !searchContainerRef.current.contains(event.target)
      ) {
        setSearchTerm("");
      }
    };

    document.addEventListener("click", handleClickOutside);

    return () => {
      document.removeEventListener("click", handleClickOutside);
    };
  }, []);

  return (
    <motion.div
      initial={{ opacity: 0 }}
      whileInView={{ opacity: 1 }}
      transition={{ duration: 1 }}
      exit={{ opacity: 1 }}
      className="search-bar" ref={searchContainerRef}>
      <img src={search} className="search-img" />
      <input
        type="text"
        placeholder="SEARCH"
        value={searchTerm}
        onChange={(e) => setSearchTerm(e.target.value)}
      />
    </motion.div>
  );
}

export default SearchBar;
