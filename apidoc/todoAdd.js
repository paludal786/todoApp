/**
 * @api {post} /todo/add Add Todo
 * @apiName Add activity
 * @apiGroup Todo
 *
 *
 * @apiSuccess {String} task  Add Your Activities.
 * @apiSuccess {DateTime} time  Select Date and Time.
 *
 * @apiSuccessExample Success-Response
 *     HTTP/1.1 200 OK
 *     {
 *       "task": "Buy BMW",
 *       "time": "17-01-20 01:59 PM"
 *     }
 *
 * @apiSuccessExample Validation-Error
 *     HTTP/1.1 422 OK
 *     {
 *      "task": "The task field is required".
 *      "time": "The task field is required".
 *     }
 *
 */