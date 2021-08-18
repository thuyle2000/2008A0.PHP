using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace d07_iterator
{
    public class Monitor
    {
        private string id, name;
        private int price;
        private bool stock;

        //property pID
        public string pID
        {
            get { return id; }
            set { id = value; }
        }


        //property pName
        public string pName
        {
            get { return name; }
            set { name = value; }
        }

        //property pPrice
        public int pPrice
        {
            get { return price; }
            set { price = value; }
        }


        //property pStock
        public bool pStock
        {
            get { return stock; }
            set { stock = value; }
        }

        public override string ToString()
        {
            string s = stock ? "con hang" : "het hang";
            return $"{id}, {name}, {price}, {s}";
        }
    }
}
