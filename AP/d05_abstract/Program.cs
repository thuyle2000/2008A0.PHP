using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace d05_abstract
{
    class Program
    {
        static void Main(string[] args)
        {

            ShapeSystem a = new ShapeSystem();
            string op = "";

            while (true)
            {
                Console.WriteLine("\n === MENU ===");
                Console.WriteLine("1. Them hinh tron");
                Console.WriteLine("2. Them hinh chu nhat");
                Console.WriteLine("3. In danh sach cac doi tuong hinh hoc");
                Console.WriteLine("4. In danh sach cac doi tuong hinh tron");
                Console.WriteLine("5. Ket thuc ");
                Console.Write(" >> nhap ma so chuc nang [1-5]: ");

                op = Console.ReadLine().Trim();
                switch (op)
                {
                    case "1":
                        a.addCircle(); break;
                    case "2":
                        a.addRectangle(); break;
                    case "3":
                        a.display(); break;
                    case "4":
                        a.displayCircle(); break;
                    case "5":
                        return;
                    default:
                        break;
                }


            }
        }
    }
}
