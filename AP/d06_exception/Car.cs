using System;
using System.Text.RegularExpressions;
using d06_exception;

namespace data
{
    public class Car
    {
        string id, name, color;
        int price;

        public string pID
        {
            get { return id; }
            set
            {
                if (Regex.IsMatch(value.Trim(), "^C\\d{3,5}$") == false)
                    throw new MyAppException("ID ko hop le (Cxxx[xx]) !!!");
                else
                    id = value;
            }
        }

        public string pName
        {
            get { return name; }
            set
            {
                if (value.Trim().Length < 3) throw new MyAppException("Ten xe phai >= 3 ky tu !!!");
                name = value;
            }
        }

        public string pColor
        {
            get { return color; }
            set { color = value; }
        }

        public int pPrice
        {
            get { return price; }
            set
            {
                if (value < 0) throw new MyAppException("Don gia phai > 0 !");
                price = value;
            }
        }


        public void accept()
        {
            //nhap ID
            while (true)
            {
                try
                {
                    Console.Write("Nhap ma so xe : ");
                    pID = Console.ReadLine().Trim();
                    break;
                }
                catch (Exception e)
                {
                    Console.WriteLine("Loi: " +e.Message);
                }
            }

            // nhap ten xe
            while (true)
            {
                try
                {
                    Console.Write("Nhap ten xe : ");
                    pName = Console.ReadLine().Trim();
                    break;
                }
                catch (Exception e)
                {
                    Console.WriteLine("Loi: " + e.Message);
                }
            }

            //nhap mau xe
            Console.Write("Nhap mau xe : ");
            pColor = Console.ReadLine().Trim();


            //nhap don gia
            while (true)
            {
                try
                {
                    Console.Write("Nhap don gia : ");
                    pPrice =  int.Parse( Console.ReadLine().Trim() );
                    break;
                }
                catch (Exception e)
                {
                    Console.WriteLine("Loi: " + e.Message);
                }
            }
        }

        public override string ToString()
        {
            return $"{id}, {name}, {color}, {price}";
        }
    }
}
