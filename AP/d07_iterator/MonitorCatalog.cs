using System;
using System.Collections;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace d07_iterator
{
    class MonitorCatalog : IEnumerable<Monitor>
    {
        Dictionary<string, Monitor> ds = new Dictionary<string, Monitor>();

        public void add()
        {
            Monitor m = new Monitor();

            Console.Write("nhap id: ");
            m.pID = Console.ReadLine().Trim();
            if (ds.ContainsKey(m.pID))
            {
                Console.WriteLine("Ma so da ton tai. Tu choi them moi !");
                return;
            }

            Console.Write("nhap ten san pham: ");
            m.pName = Console.ReadLine().Trim();

            Console.Write("nhap don gia: ");
            m.pPrice = int.Parse(Console.ReadLine().Trim());

            Console.Write("nhap trang thai ton kho (yes/no): ");
            m.pStock = Console.ReadLine().Trim().ToLower().Equals("yes");

            //luu vo ds
            ds.Add(m.pID, m);

            Console.WriteLine("Da them san pham moi thanh cong");

        }


        public IEnumerator<Monitor> GetEnumerator()
        {
            if (ds.Count == 0)
            {
                Console.WriteLine(" >> HT chua co du lieu !!!");
                yield break;
            }

            foreach (var item in ds.Values)
            {
                yield return item;
            }
        }

        IEnumerator IEnumerable.GetEnumerator()
        {
            if (ds.Count == 0)
            {
                Console.WriteLine(" >> HT chua co du lieu !!!");
                yield break;
            }

            foreach (var item in ds.Values)
            {
                yield return item;
            }
        }



    }
}
