using CC.Infrastructure.Domain;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace CC.Model.News
{
    public class News : EntityBase, IAggregateRoot
    {
        public Guid ID { get; set; }
        public string HeaderTitle { get; set; }
        public string Title { get; set; }
        public string Content { get; set; }
        public DateTime CreatedDate { get; set; }
        public int CreatedBy { get; set; }
        public string LastUpdatedDate { get; set; }
        public int LastUpdatedBy { get; set; }

        protected override void Validate()
        {
            //if (string.IsNullOrEmpty(Username))
            //{
            //    ValidationErrors.Add("Username");
            //}

            //if (Password == null || !Password.EncryptedValue.Any())
            //{
            //    ValidationErrors.Add("Password");
            //}
        }
    }
}
