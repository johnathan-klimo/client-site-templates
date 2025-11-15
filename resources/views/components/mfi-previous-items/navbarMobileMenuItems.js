import React from "react";
import { useState, useEffect } from "react";
import { Link } from "gatsby";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faBars } from "@fortawesome/free-solid-svg-icons";
import * as styles from "./navbarMobileMenuItems.module.css";

const NavbarMobileMenuItems = () => {
  const [showHamburgerMenu, setShowHamburgerMenu] = useState(false);
  // Note: Are we going to have an issue here when setting state?
  const [hamburgerClassName, setHamburgerClassName] = useState("hidden");

  const hamburgerToggler = () => {
    setShowHamburgerMenu(!showHamburgerMenu);
  };

  useEffect(() => {
    // console.log(`showHamburgerMenu: ${showHamburgerMenu}`);
    if (showHamburgerMenu) {
      // Note: Are we going to have an issue here when setting state?
      setHamburgerClassName(styles.hamburgerMenuSectionDisplayed);
    }
    if (showHamburgerMenu === false) {
      // Note: Are we going to have an issue here when setting state?
      setHamburgerClassName("hidden");
    }
  }, [showHamburgerMenu]);

  return (
    <>
      {/* eslint-disable-next-line */}
      <div onClick={hamburgerToggler}>
        <FontAwesomeIcon icon={faBars} size="2x" />
      </div>
      <div className={`${hamburgerClassName}`}>
        <ul className="font-mfi-alternate text-lg md:text-2xl text-center">
          <li className="text-neutral-50 md:pt-4">
            <Link to="/">Home</Link>
          </li>
          <li className="text-neutral-50 pt-2 md:pt-4">
            <Link to="/category/borrowing-wisely/">Borrowing Wisely</Link>
          </li>
          <li className="text-neutral-50 pt-2 md:pt-4">
            <Link to="/category/saving-wisely/">Saving Wisely</Link>
          </li>
          <li className="text-neutral-50 pt-2 md:pt-4">
            <Link to="/category/spending-wisely/">Spending Wisely</Link>
          </li>
          <li className="text-neutral-50 pt-2 md:pt-4">
            <Link to="/about-us/">About Us</Link>
          </li>
        </ul>
      </div>
    </>
  );
};

export default NavbarMobileMenuItems;
