using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using data;

namespace d06_exception
{
    class Program
    {
        static void Main(string[] args)
        {

            CarCollection a = new CarCollection();
            string op = "";

            while (true)
            {
                Console.WriteLine("\n === MENU ===");
                Console.WriteLine("1. Them xe moi");
                Console.WriteLine("2. In danh sach xe");
                Console.WriteLine("3. Ket thuc ");
                Console.Write(" >> nhap ma so chuc nang [1-3]: ");

                op = Console.ReadLine().Trim();
                switch (op)
                {
                    case "1":
                        a.add(); break;
                    case "2":
                        a.display(); break;
                    case "3":
                        return;
                    default:
                        break;
                }


            }

        }
    }
}
