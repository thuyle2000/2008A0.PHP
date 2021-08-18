using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace d07_iterator
{
    class Program
    {
        static void Main(string[] args)
        {
            //menu

           MonitorCatalog a = new MonitorCatalog();
            string op = "";

            while (true)
            {
                Console.WriteLine("\n === MENU ===");
                Console.WriteLine("1. Them monitor moi");
                Console.WriteLine("2. In danh sach monitor");
                Console.WriteLine("3. In danh sach monitor da het hang");
                Console.WriteLine("4. Ket thuc ");
                Console.Write(" >> nhap ma so chuc nang [1-4]: ");

                op = Console.ReadLine().Trim();
                switch (op)
                {
                    case "1":
                        a.add(); break;

                    case "2":                    
                        foreach (var item in a)
                        {
                            Console.WriteLine(item);
                        }
                        break;

                    case "3":
                        foreach (var item in a.Where(x => x.pStock==false).ToList()) {
                            Console.WriteLine(item);
                        }
                        break;

                    case "4":
                        return;

                    default:
                        break;
                }


            }
        }
    }
}
