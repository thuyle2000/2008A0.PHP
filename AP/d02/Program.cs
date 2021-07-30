using System;


namespace d02_statements
{
    class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Demo Day 2");
            Console.WriteLine("==========");

            //demoIF();
            //demoIF2();
            //demoIF3();
            //demoSwitch();

            DemoLoop demo = new DemoLoop();
            //demo.testFOR();
            //demo.testWHILE();
            demo.testFOREACH();
        }

        static void demoIF()
        {
            //kiem tra 3 canh a, b, c co phai la 3 canh hop le cua 1 tam giac ko ?
            Console.Write("nhap canh a: ");
            int a = int.Parse(Console.ReadLine());

            Console.Write("nhap canh b: ");
            int b = int.Parse(Console.ReadLine());

            Console.Write("nhap canh c: ");
            int c = int.Parse(Console.ReadLine());

            if (a + b <= c || a + c <= b || b + c <= a)
            {
                Console.WriteLine("Cac canh a, b, c ko du dieu kien de tao 1 tam giac");
            }
            else
            {
                Console.WriteLine("Day la 3 canh cua 1 tam giac");
            }
        }

        static void demoIF2()
        {
            //kiem tra 3 canh a, b, c co phai la 3 canh hop le cua 1 tam giac ko ?
            Console.Write("nhap canh a: ");
            int a = int.Parse(Console.ReadLine());

            Console.Write("nhap canh b: ");
            int b = int.Parse(Console.ReadLine());

            Console.Write("nhap canh c: ");
            int c = int.Parse(Console.ReadLine());

            if (a + b <= c || a + c <= b || b + c <= a)
            {
                Console.WriteLine("Cac canh a, b, c ko du dieu kien de tao 1 tam giac");
            }
            else if (a == b && b == c)
            {
                Console.WriteLine("Day la tam giac deu");
            }
            else if (a == b || a == c || b == c)
            {
                Console.WriteLine("Day la tam giac can");
            }
            else
            {
                Console.WriteLine("Day la tam giac");
            }
        }

        static void demoIF3()
        {
            //kiem tra 1 thang bat ky trong nam co toi da bn ngay
            Console.Write("Nhap thang can kiem tra [1-12]: ");
            int mm = int.Parse(Console.ReadLine());
            int dd = 0;

            if (mm == 1 || mm == 3 || mm == 5 || mm == 7 || mm == 8 || mm == 10 || mm == 12)
            {
                dd = 31;
            }
            else if (mm == 4 || mm == 6 || mm == 9 || mm == 11)
            {
                dd = 30;
            }
            else if (mm == 2)
            {
                Console.Write("Nhap nam: ");
                int yy = int.Parse(Console.ReadLine().Trim());

                //kiem tra nam nhuan

                //if(isLeapYear(yy))
                //{
                //    dd = 29;
                //}
                //else
                //{
                //    dd = 28;
                //}

                dd = isLeapYear(yy) ? 29 : 28;
            }

            if (dd == 0)
            {
                Console.WriteLine("Thang {0} la thang hop le !!!", mm);
            }
            else
            {
                Console.WriteLine("Thang {0} co {1} ngay !!!", mm, dd);
            }
        }

        private static bool isLeapYear(int yy)
        {
            //if( (yy%400==0) || (yy%4==0 && yy%100!=0))
            //{
            //    return true;
            //}
            //return false;

            return (yy % 4 == 0 && yy % 100 != 0) || (yy % 400 == 0);
        }

        static void demoSwitch()
        {
            Console.Write("Nhap thang can kiem tra [1-12]: ");
            int mm = int.Parse(Console.ReadLine());
            int dd = 0;

            switch (mm)
            {
                case 1:
                case 3:
                case 5:
                case 7:
                case 8:
                case 10:
                case 12:
                    dd = 31;
                    break;
                case 4:
                case 6:
                case 9:
                case 11:
                    dd = 30;
                    break;
                case 2:
                    Console.Write("Nhap nam: ");
                    int yy = int.Parse(Console.ReadLine().Trim());
                    dd = isLeapYear(yy) ? 29 : 28;
                    break;
                default:
                    dd = 0; 
                    break;
            }


            if (dd == 0)
            {
                Console.WriteLine("Thang {0} la thang hop le !!!", mm);
            }
            else
            {
                Console.WriteLine("Thang {0} co {1} ngay !!!", mm, dd);
            }


        }
    }
}
