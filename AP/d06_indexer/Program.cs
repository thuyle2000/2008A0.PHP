//using System;


namespace d06_indexer
{
    class Program
    {
        static void Main(string[] args)
        {
            DemoIndexer demo = new DemoIndexer();

            //truy xuat 5 phan tu dau tien cua mang a[] trong DemoIndexer
            for(int i=0; i<5; i++)
            {
                System.Console.WriteLine($" a[{i}] = {demo[i]}");
            }

            //truy xuat ten cua 3 sv dau tien trong mang ds[,] cua DemoIndexer
            System.Console.WriteLine("\n Danh sach 3 sinh vien :");
            for (int i = 0; i < 3; i++)
            {
                System.Console.WriteLine($" {demo[i,0]}  - {demo[i,1]}");
            }
        }
    }

    public class DemoIndexer
    {
        private int[] a = { 1, 1, 2, 3, 5, 8, 13, 21, 34};
        private string[,] ds = {
            { "s1","Thien" }, {"s2","Thinh"}, {"s3","Dung" }, {"s4", "Thang"}, {"s5", "Hau"}
        };  

        //indexer thu 1: truy mang so nguyen a[]
        internal int this[int i]
        {
            get { return a[i]; }
            set { a[i] = value; }
        }

        //indexer thu 2: truy xuat mang chuoi ky tu 2 chieu ds[,]
        internal string this[int r, int c]
        {
            get { return ds[r, c]; }
            set { ds[r, c] = value;  }
        }


    }
}
