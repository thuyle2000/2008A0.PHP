using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Text.RegularExpressions;

namespace d05_property
{
    public class Product
    {
        string id, name;
        int price;

        //dn property cho field id
        public string pID
        {
            get { return id; }
            set
            {
                //kiem tra ma sp phai co dinh dang [Pxxxx]
                if (Regex.IsMatch(value, "^P\\d{4}$"))
                {
                    id = value; //gia tri cua propery dung dinh dang yeu cau
                }
                else
                {
                    throw new FormatException("Id ko hop le (Pxxxx), x: la ky so !");
                }
            }
        }

        //property cho field name
        public string pName
        {
            get
            {
                return name;
            }
            set
            {
                //kiem tra ten sp phai co do dai tu 2 -> 20 ky tu
                if (value.Trim().Length >= 2 && value.Trim().Length <= 20)
                {
                    name = value; //gia tri cua propery dung yeu cau
                }
                else
                {
                    throw new FormatException("Ten SP ko hop le : phai tu 2-20 ky tu !");
                }
            }
        }


        //property cho field price
        public int pPrice
        {
            get
            {
                return price;
            }
            set
            {
                //don gia phai >=0
                if (value>=0)
                {
                    price = value; //gia tri cua propery dung yeu cau
                }
                else
                {
                    throw new FormatException("Don gia ko hop le, phai lon >=0 !");
                }
            }
        }


        public override string ToString()
        {
            return $"id: {id}, ten sp: {name}, don gia: {price}";
        }
    }
}
