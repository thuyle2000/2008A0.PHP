using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace d04_inheritant
{
    class Program
    {
        static void Main(string[] args)
        {
            AptechSystem a = new AptechSystem();
            string op = "";

            while (true)
            {
                Console.WriteLine("\n === MENU ===");
                Console.WriteLine("1. Them sv");
                Console.WriteLine("2. In danh sach sv");
                Console.WriteLine("3. In danh sach sv nam");
                Console.WriteLine("4. In danh sach sv nu");
                Console.WriteLine("5. In danh sach sv theo diem");
                Console.WriteLine("6. Ket thuc ");
                Console.Write(" >> nhap ma so chuc nang [1-6]: ");

                op = Console.ReadLine().Trim();
                switch (op)
                {
                    case "1":
                        a.add(); break;
                    case "2":
                        a.display(); break;
                    case "3":
                        a.display(true); break;
                    case "4":
                        a.display(false); break;
                    case "5":
                        int m = 0;
                        while (true)
                        {
                            try
                            {
                                Console.WriteLine(" nhap muc diem [0-100]: ");
                                m = int.Parse(Console.ReadLine().Trim());
                                if (m >= 0 && m <= 100) break;
                            }
                            catch (Exception e)
                            {
                                Console.WriteLine("Loi : "+ e.Message);
                            }
                        }
                        a.display(m);

                        break;

                    case "6":
                        return;
                    default:
                        break;
                }


            }


        }
    }
}
