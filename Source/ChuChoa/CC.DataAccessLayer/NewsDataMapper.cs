using CC.Model.News;
using Dapper;
using System;
using System.Collections.Generic;
using System.Data;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace CC.DataAccessLayer
{
    public class NewsDataMapper : AbstractDataMapper<News>, INewsDataMapper
    {
        protected override string TableName
        {
            get
            {
                return "News";
            }
        }

        public News FindById(Guid id)
        {
            return FindSingle("SELECT * FROM News WHERE ID=@ID", new { ID = id });
        }

        public News FindByNewsKey(string key)
        {
            return FindSingle("SELECT * FROM News WHERE HeaderTitle like '%@pkey%", new { pkey = key });
        }

        public void Insert(News item)
        {
            using (IDbConnection cn = Connection)
            {
                cn.Open();
                item.ID =
                    cn.Query<Guid>(
                        "INSERT INTO [dbo].[News] ([ID],[HeaderTitle],[Title],[Content],[CreatedBy],[CreatedDate],[LastUpdatedBy],[LastUpdateDate]) VALUES(@ID,@HeaderTitle,@Title,@Content,@CreatedBy,@CreatedDate,@LastUpdatedBy,@LastUpdateDate)",
                        new { ID = Guid.NewGuid(), item.HeaderTitle, item.Title, item.Content, item.CreatedBy, item.CreatedDate, item.LastUpdatedBy, item.LastUpdatedDate }).First();
            }
        }

        public override News Map(dynamic result)
        {
            var item = new News
            {
                ID = result.ID,
                HeaderTitle = result.HeaderTitle,
                Title = result.Title,
                Content = result.Content,
                CreatedBy = result.CreatedBy,
                CreatedDate = result.CreatedDate,
                LastUpdatedBy = result.LastUpdatedBy,
                LastUpdatedDate = result.LastUpdatedDate
            };

            return item;
        }

        public void Update(News item)
        {
            using (IDbConnection cn = Connection)
            {
                cn.Open();
                cn.Execute(
                    "UPDATE [dbo].[News] SET [HeaderTitle] = @HeaderTitle, [Title] = @Title, [Content] = @Content, [CreatedBy] = @CreatedBy, [CreatedDate] = @CreatedDate, [LastUpdatedBy] = @LastUpdatedBy, [LastUpdateDate] = @LastUpdateDate WHERE ID=@ID",
                    new { ID = Guid.NewGuid(), item.HeaderTitle, item.Title, item.Content, item.CreatedBy, item.CreatedDate, item.LastUpdatedBy, item.LastUpdatedDate });
            }
        }
    }
}
