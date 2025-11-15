import React from 'react';
import { Link } from "gatsby";

const Footer = () => {
  return (
    <footer>
      <div className="bg-mfi-blue">
        <div className="container mx-auto max-w-7xl mt-8 px-4 2xl:px-0">
          <div className="flex flex-col gap-x-8 lg:flex-row py-8 text-neutral-50">
            <div className="lg:basis-1/5 lg:grow sm:pr-20 md:pr-72 lg:pr-10">
              <h4 className="font-mfi-alternate text-2xl">About This Site</h4>
              <p className="text-neutral-200 pt-4">
                My Finance Instructor is a Canadian finance blog about three key personal finance topics: spending
                wisely, saving wisely, and borrowing wisely.
              </p>
              <p className="text-neutral-200 py-4">I hope you’ll join me on this journey together!</p>
            </div>
            <div className="lg:basis-1/5 lg:grow">
              <h4 className="font-mfi-alternate text-2xl">Posts by Category</h4>
              <nav className="py-4">
                <ul className="text-neutral-200">
                  <li className="hover:text-mfi-orange">
                    <Link to="/category/borrowing-wisely/">Borrowing Wisely</Link>
                  </li>
                  <li className="hover:text-mfi-orange">
                    <Link to="/category/cfa-designation-advice/">CFA Designation Advice</Link>
                  </li>
                  <li className="hover:text-mfi-orange">
                    <Link to="/category/corporate-finance/">Corporate Finance</Link>
                  </li>
                  <li className="hover:text-mfi-orange">
                    <Link to="/category/saving-wisely/">Saving Wisely</Link>
                  </li>
                  <li className="hover:text-mfi-orange">
                    <Link to="/category/spending-wisely/">Spending Wisely</Link>
                  </li>
                </ul>
              </nav>
            </div>
            <div className="lg:basis-1/5 lg:grow">
              <h4 className="font-mfi-alternate text-2xl">Other Important Pages</h4>
              <nav className="pt-4">
                <ul className="text-neutral-200">
                  <li className="hover:text-mfi-orange">
                    <Link to="/about-us/">About Us</Link>
                  </li>
                  <li className="hover:text-mfi-orange">
                    <Link to="/privacy-policy/">Privacy Policy</Link>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
      <div className="container mx-auto max-w-7xl py-4 px-4 2xl:px-0">
        <p className="text-center">&copy; {new Date().getFullYear()} My Finance Instructor Inc.</p>
      </div>
    </footer>
  );
}

export default Footer