import React from "react";
import { Link } from "gatsby";

const NavbarDesktopMenuItems = () => {
  return (
    <nav>
      <ul className="flex font-mfi-alternate text-2xl">
        <li className="text-mfi-blue hover:text-mfi-orange">
          <Link to="/">Home</Link>
        </li>
        <li className="text-mfi-blue hover:text-mfi-orange ml-6">
          <Link to="/category/borrowing-wisely/">Borrowing Wisely</Link>
        </li>
        <li className="text-mfi-blue hover:text-mfi-orange ml-6">
          <Link to="/category/saving-wisely/">Saving Wisely</Link>
        </li>
        <li className="text-mfi-blue hover:text-mfi-orange ml-6">
          <Link to="/category/spending-wisely/">Spending Wisely</Link>
        </li>
        <li className="text-mfi-blue hover:text-mfi-orange ml-6">
          <Link to="/about-us/">About Us</Link>
        </li>
      </ul>
    </nav>
  );
};

export default NavbarDesktopMenuItems;
